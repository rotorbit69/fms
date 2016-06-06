<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */

    public function run()
    {

        DB::table('users')->truncate();/** this truncates again incase you run it individually - not via the dataseeder */

      factory('App\User',30)->create([
        /** can set default values here : 'Duration'=>'600' **/
        ]);


    }
}
