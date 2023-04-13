<?php
/*
 * Laravel Özgeçmiş sitesi projesi
 * www.keykubad.com & www.ekonomikhost.net
 * Kodlayan Keykubad => Gürkan Ersan :)
 * Sürüm : Laravel 5.0
 * Rotalar
 */
//Ön kısım rotasyonları
    Route::get('/', 'OnKisimController@index');
    Route::get('mail', 'OnKisimController@mailgor');
    Route::post('mailgit', 'OnKisimController@mailgit');
    Route::get('panel', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


/* Admin kısmı rotasyonları */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{

    Route::get('siteayar', 'panelkontrol\SiteAyarController@ayar');
    Route::get('cikis', 'panelkontrol\PanelController@cikis');

    Route::get('sifre', 'panelkontrol\SifreController@degis');
    Route::post('sifre', 'panelkontrol\SifreController@degiskayit');

    Route::get('yonetici', 'panelkontrol\PanelController@giris');
    Route::post('siteayar', 'panelkontrol\SiteAyarController@ayarkayit');

    Route::get('bilgiler', 'panelkontrol\BilgilerController@bilgiler');
    Route::post('bilgiler', 'panelkontrol\BilgilerController@bilgikayit');
    Route::get('bilgiliste', 'panelkontrol\BilgilerController@bilgicek');
    Route::get('bilgiduzen/{id}', 'panelkontrol\BilgilerController@bilgiduzenle');
    Route::post('bilgiduzen/{id}', 'panelkontrol\BilgilerController@bilgidegis');
    Route::get('bilgisil/{id}', 'panelkontrol\BilgilerController@bilgilersil');

    Route::get('kategoriler', 'panelkontrol\KategorilerController@kategori');
    Route::post('kategoriler', 'panelkontrol\KategorilerController@kategorikayit');
    Route::get('katduzen/{id}', 'panelkontrol\KategorilerController@kategoriduzenle');
    Route::get('katsil/{id}', 'panelkontrol\KategorilerController@kategorisil');
    Route::post('katduzen/{id}', 'panelkontrol\KategorilerController@kategoriduzen');

});