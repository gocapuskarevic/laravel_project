<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Goca P',
        'username' => 'goca_p',
        'email'    => 'goca@email.com',
        'password' => Hash::make('raep'),
    ));
}

}