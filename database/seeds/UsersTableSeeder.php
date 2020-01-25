<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array('nom'=>'mahi','prenom'=>'Begoug','username'=>'mahi','userType'=>'admin','email'=>'gm_begoug@esi.dz','password'=>Hash::make('123456789')),
            array('nom'=>'hocine','prenom'=>'Begoug','username'=>'hocine','userType'=>'apprenant','email'=>'gm_hocine@esi.dz','password'=>Hash::make('123456789')),
            array('nom'=>'hamza','prenom'=>'Begoug','username'=>'hamza','userType'=>'apprenant','email'=>'gm_hmz@esi.dz','password'=>Hash::make('123456789')),
        );

        DB::table('users')->insert($users);
    }
}
