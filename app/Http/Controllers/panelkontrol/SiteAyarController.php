<?php namespace App\Http\Controllers\panelkontrol;
use App\Ayar;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use Redirect;
use File;
use Image;
use ImageManager;




class SiteAyarController extends Controller {

    /*
     * Laravel Özgeçmiş sitesi projesi
     * www.keykubad.com
     * Kodlayan Keykubad => Gürkan Ersan :)
     * Sürüm : Laravel 5.0
        Panel site ayarları kontrollerim burada
     */
    public function ayar()
    {
        $ayar=Ayar::all();
        return view('panel.siteayar',array('ayarlar' => $ayar));
    }
    //gelen post verisini karşılama yapıyoruz
    public function ayarkayit()
    {
        $validate = Validator::make(Input::all(), Ayar::$rules);
        $messages = $validate->messages();
        if ($validate->fails())
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $messages->first() . '', 'type' => 'alert-danger'));
        $ayar = Ayar::find(1);
        $ayar ->baslik      =Input::get('baslik');
        $ayar ->keyword     =Input::get('keyword');
        $ayar ->aciklama    =Input::get('aciklama');
        $ayar ->mail        =Input::get('mail');
        $ayar ->hakkimda    =Input::get('hakkimda');
        $ayar ->tel         =Input::get('tel');
        $ayar ->sosyal      =Input::get('sosyal');
        $ayar ->etiket      =Input::get('etiket');
        if (Input::hasFile('resim')) {
            File::delete('resimler'.$ayar->resim.'');
            $resim = Input::file('resim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/', $isim);
            $image = Image::make('resimler/' . $isim)->resize(80, 80)->save();
            $ayar->resim = $isim;
            $ayar->save();
        }
        $ayar->save();
        if ($ayar->save()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Site ayarları kaydedildi', 'text' => 'Sitenize ait genel ayarlar başarıyla kaydedildi', 'type' => 'alert-success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Hata!!', 'text' => 'Site ayarları kaydedilemedi', 'type' => 'alert-danger'));
        }
    }


}
