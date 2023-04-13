<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Ayar extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'siteayar';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
//gerekli olan boş bırakılamaz ayarları buraya ekliyoruz.
    public static $rules = array('baslik'=>'required');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
     *
	 */
    public function kategori(){
        return $this->belongsTo('App\User');

    }

    protected $fillable = array('baslik', 'etiket', 'aciklama','mail','keyword','hakkimda','tel','resim','sosyal');

}
