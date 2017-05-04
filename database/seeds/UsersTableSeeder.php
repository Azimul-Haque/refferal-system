<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('types')->insert([
            'name' => 'Facebook follower',
        ]);         

        DB::table('types')->insert([
            'name' => 'Facebook page like',
        ]);        

        DB::table('types')->insert([
            'name' => 'Facebook share',
        ]);      

        DB::table('types')->insert([
            'name' => 'Facebook post like',
        ]);     

        DB::table('types')->insert([
            'name' => 'Twitter follower',
        ]);   

        DB::table('types')->insert([
            'name' => 'Twitter like',
        ]); 

        DB::table('types')->insert([
            'name' => 'Twitter tweet',
        ]);

        DB::table('types')->insert([
            'name' => 'Twitter retweet',
        ]); 

        DB::table('types')->insert([
            'name' => 'Youtube subscribe',
        ]); 

        DB::table('types')->insert([
            'name' => 'Youtube like',
        ]); 
    }
}