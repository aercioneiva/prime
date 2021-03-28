<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Aercio Ferreira Neiva';
        $user->email = 'aercio@ogaweb.com';
        $user->password = bcrypt('@mudar123');
        $user->save();

        $user = new User;
        $user->name = 'Beneilsom kazumi';
        $user->email = 'beneilsom@ogaweb.com';
        $user->password = bcrypt('@mudar123');
        $user->save();

        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('@123456@');
        $user->save();

    }
}
