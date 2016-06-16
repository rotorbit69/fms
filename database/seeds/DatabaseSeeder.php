<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** note Appendices table is not truncated - as it holds static control values */

	protected $toTruncate = ['users' , 'shifts' , 'flights' ]; //* array of files to clear before seeding **/

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
        $this->call(FlightsTableSeeder::class);
        $this->call(AppendicesTableSeeder::class); /** Appendices table holds static control values */

    }
}
