<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

	protected $toTruncate = ['users' , 'shifts']; //* array of files to clear before seeding **/

    /**
     * Run the database seeds.
     */
   
    public function run()
    {
    	foreach ($this->toTruncate as $table) {
    		DB::table($table)->truncate();
    	}

		$this->call(UsersTableSeeder::class);
        $this->call(ShiftsTableSeeder::class);

    }
}
