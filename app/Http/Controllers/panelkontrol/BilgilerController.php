<?php namespace App\Http\Controllers\panelkontrol;
use App\Bilgiler;
use App\Kategoriler;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use Redirect;
use Hash;
use DB;




class BilgilerController extends Controller {

    /*
     * Laravel Özgeçmiş sitesi projesi
     * www.keykubad.com
     * Kodlayan Keykubad => Gürkan Ersan :)
     * Sürüm : Laravel 5.0
     * Bilgiler kısmına ait kontrollerimiz
     */
    public function bilgiler()
    {
        $kategori  =Kategoriler::all();
        return view('panel.bilgiler',['kategoriler'=>$kategori]);
    }
    //gelen post verisini karşılama yapıyoruz
    public function bilgikayit()
    {
        $bilgi = New Bilgiler;
        $bilgi ->katid          =Input::get('kategori');
        $bilgi ->yil             =Input::get('yil');
        $bilgi ->baslik          =Input::get('baslik');
        $bilgi ->aciklama          =Input::get('aciklama');
        $bilgi ->derece          =Input::get('derece');
        $bilgi->save();
        if ($bilgi->save()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Bilgiler kaydedildi', 'text' => 'Bilgiler başarıyla kaydedildi', 'type' => 'alert-success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Hata!!', 'text' => 'Bilgiler kaydedilemedi', 'type' => 'alert-danger'));
        }
    }
    //bilgilerdeki listeyi alıyoruz
    public function bilgicek()
    {
        $bilgi  =Bilgiler::all();
        return view('panel.bilgiliste',['bilgiler'=>$bilgi]);
    }
    //bilgileri düzenleme goruntusu
    public function bilgiduzenle($id)
    {
        $kategori  =Kategoriler::all();
        $bilgi=Bilgiler::findOrFail($id);
        return view('panel.bilgiduzen',array('bilgiler' => $bilgi,'kategoriler'=>$kategori));
    }
    //gelen post verisini karşılama yapıyoruz
    public function bilgidegis($id)
    {
        $bilgi = Bilgiler::find($id);
        $bilgi ->katid          =Input::get('kategori');
        $bilgi ->yil             =Input::get('yil');
        $bilgi ->baslik          =Input::get('baslik');
        $bilgi ->aciklama          =Input::get('aciklama');
        $bilgi ->derece          =Input::get('derece');
        $bilgi->save();
        if ($bilgi->save()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Bilgiler kaydedildi', 'text' => 'Bilgiler başarıyla kaydedildi', 'type' => 'alert-success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Hata!!', 'text' => 'Bilgiler kaydedilemedi', 'type' => 'alert-danger'));
        }
    }
    //kategoriyi siliyoruz
    public function bilgilersil($id)
    {
        $kat=Bilgiler::find($id);
        $kat->delete();
        if (!$kat->delete()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Bilgiler başarıyla silindi', 'text' => 'Bilgi silinme işlemi başarılı', 'type' => 'alert-success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Hata!!', 'text' => 'Bilgiler silinemedi', 'type' => 'alert-danger'));
        }
    }
}
