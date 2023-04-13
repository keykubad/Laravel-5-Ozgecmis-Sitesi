<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Kategoriler extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'kategoriler';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
//gerekli olan boş bırakılamaz ayarları buraya ekliyoruz.
    public static $rules = array('katad'=>'required','sira'=>'required');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

    protected $fillable = array('katadi','sira','id');


}
