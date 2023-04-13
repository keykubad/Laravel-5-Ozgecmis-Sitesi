<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
class Bilgiler extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bilgiler';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    public $timestamps = false;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    protected $fillable = array('katid','yil','baslik');

    //kategori id isine göre bilgilerdeki katid eşleştirip kategori ismini alıyoruz ilişkilendirme
    public function kategori(){
        return $this->belongsTo('App\Kategoriler','katid');

    }

}
