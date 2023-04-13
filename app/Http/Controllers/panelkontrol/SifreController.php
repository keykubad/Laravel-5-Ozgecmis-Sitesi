<?php namespace App\Http\Controllers\panelkontrol;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use Redirect;
use Hash;





class SifreController extends Controller {

    /*
     * Laravel Özgeçmiş sitesi projesi
     * www.keykubad.com
     * Kodlayan Keykubad => Gürkan Ersan :)
     * Sürüm : Laravel 5.0
     * Yönetici şifresi değiştirme kısmı
     */
    public function degis()
    {
        $user=User::all();
        return view('panel.sifre',array('users' => $user));
    }
    //gelen post verisini karşılama yapıyoruz
    public function degiskayit()
    {
        $validate = Validator::make(Input::all(), User::$rules);
        $messages = $validate->messages();
        if ($validate->fails())
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $messages->first() . '', 'type' => 'alert-danger'));
        $user = User::find(1);
        $user ->name        =Input::get('name');
        $user ->email       =Input::get('email');
        $user ->password     =Hash::make(Input::get('password'));
        $user->save();
        if ($user->save()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Kullanıcı ayarları kaydedildi', 'text' => 'Kullanıcı bilgileri başarıyla kaydedildi', 'type' => 'alert-success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Hata!!', 'text' => 'Kullanıcı ayarları kaydedilemedi', 'type' => 'alert-danger'));
        }
    }

}
