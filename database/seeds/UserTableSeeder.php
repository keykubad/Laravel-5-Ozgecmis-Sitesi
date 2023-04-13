<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {
    public function run()
    {

        DB::table('users')->delete();

        User::create([
            'email' => 'info@keykubad.com',
            'name' => 'Gürkan Ersan',
            'password' => Hash::make('123456')

        ]);

    }
}