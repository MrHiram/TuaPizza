<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['sudo','sudo@su.com','12345678','1','avatar.png',],
            ['Hiram','hiram@gmail.com','12345678','1','avatar.png',],
            ['Priscilla','pri@gmail.com','12345678','1','avatar.png',],
        ];

         $len =count($users);

        for($i=0; $i<$len; $i++){
            $user = new User();
           $user->name =$users[$i][0];
           $user->email =$users[$i][1];
           $user->password =Hash::make($users[$i][2]);
           $user->role =$users[$i][3];
           $user->picture =$users[$i][4];
           $user->save();
        }
    }
}
