<?php
use Illuminate\Database\Seeder;
use App\Ayar;

class SiteAyarSeeder extends Seeder {
    public function run()
    {

        DB::table('siteayar')->delete();

        Ayar::create([
        'baslik' => 'Özgeçmiş Sitesi',
        'etiket' => 'PHP,HTML,LARAVEL,CSS,XHTML',
        'aciklama' => 'Bu bir özgeçmiş sitesi açıklamasıdır',
        'mail' => 'info@keykubad.com',
        'keyword' => 'ozgeçmiş,site,laravel,özgeçmiş sitesi',
        'hakkimda' => 'Özgeçmiş sitesi hakkımda sayfası kısa özgeçmiş bilgileri burada',
        'tel' => '0232 999 96 88',
        'resim' => 'avatarjpgfhntl.jpg',
        'sosyal' => 'http://www.facebook.com'
        ]);

    }
}