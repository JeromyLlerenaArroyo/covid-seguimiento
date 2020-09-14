<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person_id = DB::table('people')->insertGetId([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'dni' => '00000000',
            'birth_date' => '2000-01-01',
            'sex' => 1,
            'phone_number' => '999999999',
        ]);

        DB::table('users')->insert([
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('secret'),
        	'person_id' => $person_id,
        ]);

    }
}
