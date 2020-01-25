<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class NotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notions = array(
            array('id'=>'1','title'=>'PHP functions'),
            array('id'=>'2','title'=>'PHP Arrays'),
            array('id'=>'3','title'=>'PHP Loops'),
            array('id'=>'4','title'=>'PHP Switch'),
            array('id'=>'5','title'=>'PHP Operators'),
        );

        DB::table('notions')->insert($notions);
    }
}
