<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Goca P',
        'email'    => 'goca@email.com',
        'password' => Hash::make('raep'),
    ));
}

}