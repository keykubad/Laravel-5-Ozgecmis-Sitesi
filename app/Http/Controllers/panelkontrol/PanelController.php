<?php namespace App\Http\Controllers\panelkontrol;
use Auth;
use Redirect;

class PanelController extends Controller {

    /*
     * Laravel Özgeçmiş sitesi projesi
     * www.keykubad.com
     * Kodlayan Keykubad => Gürkan Ersan :)
     * Sürüm : Laravel 5.0
        Panel anasayfa kontrollerim burada
     */
    public function giris()
    {
        return view('panel.index');
    }
    public function cikis()
    {
        Auth::logout();
        return Redirect::to('panel');
    }


}
