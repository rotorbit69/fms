<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
	protected $toTruncate = ['users' , 'shifts' , 'flights' ]; //* array of files to clear before seeding **/
                    
                    /** note Appendices table is not truncated - as it holds static control values */

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
