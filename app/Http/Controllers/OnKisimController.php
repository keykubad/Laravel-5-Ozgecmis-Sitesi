<?php namespace App\Http\Controllers;
use App\Ayar;
use App\User;
use App\Bilgiler;
use App\Kategoriler;
use DB;
use Mail;
use Input;
use Redirect;
use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Request;
/*
 * Laravel Özgeçmiş sitesi projesi
 * www.keykubad.com & www.ekonomikhost.net
 * Kodlayan Keykubad => Gürkan Ersan :)
 * Sürüm : Laravel 5.0
 * Ön kısım işlemleri
 */

class OnKisimController extends Controller {


    public function index()
	{
        $siteayar       =Ayar::find(1);
        $sosyal =explode(',',$siteayar->sosyal);
        $user           = User::find(1);
        //1. sıradaki kategoriye ait bilgiler
        $sira1          = DB::table('kategoriler')->where('sira', '1')->first();
        $bilgi1          =DB::table('bilgiler')->where('katid', $sira1->id)->get();
        //2. sıradaki kategoriye ait bilgiler
        $sira2          = DB::table('kategoriler')->where('sira', '2')->first();
        $bilgi2          =DB::table('bilgiler')->where('katid', $sira2->id)->get();
        //3. sıradaki kategoriye ait bilgiler
        $sira3          = DB::table('kategoriler')->where('sira', '3')->first();
        $bilgi3          =DB::table('bilgiler')->where('katid', $sira3->id)->get();
        //4. sıradaki kategoriye ait bilgiler
        $sira4          = DB::table('kategoriler')->where('sira', '4')->first();
        $bilgi4          =DB::table('bilgiler')->where('katid', $sira4->id)->get();
        //5. sıradaki kategoriye ait bilgiler
        $sira5          = DB::table('kategoriler')->where('sira', '5')->first();
        $bilgi5          =DB::table('bilgiler')->where('katid', $sira5->id)->get();
        //6. sıradaki kategoriye ait bilgiler
        $sira6          = DB::table('kategoriler')->where('sira', '6')->first();
        $bilgi6          =DB::table('bilgiler')->where('katid', $sira6->id)->get();
		return view('index', [
            'siteayarlar'=>$siteayar,
            'users'=> $user,
            'bilgi1'=>$bilgi1,
            'bilgi2'=>$bilgi2,
            'bilgi3'=>$bilgi3,
            'bilgi4'=>$bilgi4,
            'bilgi5'=>$bilgi5,
            'bilgi6'=>$bilgi6,
            'sira1'=>$sira1,
            'sira2'=>$sira2,
            'sira3'=>$sira3,
            'sira4'=>$sira4,
            'sira5'=>$sira5,
            'sira6'=>$sira6,
            'sosyaller'=>$sosyal

        ]);
	}
    public function mailgor(){
        $siteayarlar       =Ayar::find(1);
        $users           = User::find(1);
        return View('mailgit',compact('siteayarlar', 'users'));
    }
    public function mailgit(Mail $message){
        $siteayarlar       =Ayar::find(1);
        $data   =['adsoyad'=>Input::get('adsoyad'),'mesaj'=>Input::get('mesaj'),'email'=>Input::get('email'),'konu'=>Input::get('konu')];
        Mail::send('emails.mail', $data, function($message)
        {
            $message->to('info@keykubad.com', 'Gürkan Ersan')->subject('Özgeçmiş sitemden mail var');

        });
        if($message){
            return Redirect::to('mail')->with(array('mesaj' => 'true', 'title' => 'Mail Başarılı!', 'text' => 'Emailiniz başarıyla gönderildi!'));
        }
    }

}
