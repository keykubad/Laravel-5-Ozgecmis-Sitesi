<?php namespace App\Http\Controllers\panelkontrol;
use App\Kategoriler;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use Redirect;
use Hash;




class KategorilerController extends Controller {

    /*
     * Laravel Özgeçmiş sitesi projesi
     * www.keykubad.com
     * Kodlayan Keykubad => Gürkan Ersan :)
     * Sürüm : Laravel 5.0
     * Kategorileri ekleme işlemleri
     */
    public function kategori()
    {
        $kat=Kategoriler::all();
        return view('panel.kategoriler',array('kategoriler' => $kat));
    }
    //gelen post verisini karşılama yapıyoruz
    public function kategorikayit()
    {
        $validate = Validator::make(Input::all(), Kategoriler::$rules);
        $messages = $validate->messages();
        if ($validate->fails())
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $messages->first() . '', 'type' => 'alert-danger'));
        $kat = new Kategoriler;
        $kat ->katadi      =Input::get('katad');
        $kat ->sira         =Input::get('sira');
        $kat->save();
        if ($kat->save()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Kategori başarıyla kaydedildi', 'text' => 'Kategori başarıyla eklendi', 'type' => 'alert-success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Hata!!', 'text' => 'Kategori eklenemedi', 'type' => 'alert-danger'));
        }
    }
    //kategorileri düzenleme goruntusu
    public function kategoriduzenle($id)
    {
        $kat=Kategoriler::findOrFail($id);
        return view('panel.katduzen',array('kategoriler' => $kat));
    }
    //gelen kategori id sine düzenleme yapıyoruz
    public function kategoriduzen($id)
    {
        $validate = Validator::make(Input::all(), Kategoriler::$rules);
        $messages = $validate->messages();
        if ($validate->fails())
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $messages->first() . '', 'type' => 'alert-danger'));
        $kat = Kategoriler::find($id);
        $kat ->katadi      =Input::get('katad');
        $kat ->sira         =Input::get('sira');
        $kat->save();
        if ($kat->save()) {
            return Redirect::to('admin/kategoriler')->with(array('mesaj' => 'true', 'title' => 'Kategori başarıyla kaydedildi', 'text' => 'Kategori başarıyla eklendi', 'type' => 'alert-success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Hata!!', 'text' => 'Kategori eklenemedi', 'type' => 'alert-danger'));
        }
    }

    //kategoriyi siliyoruz
    public function kategorisil($id)
    {
        $kat=Kategoriler::find($id);
        $kat->delete();
        if (!$kat->delete()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Kategori başarıyla silindi', 'text' => 'Kategori silinme işlemi başarılı', 'type' => 'alert-success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Hata!!', 'text' => 'Kategori silinemedi', 'type' => 'alert-danger'));
        }
    }

}
