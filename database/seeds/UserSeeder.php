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
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'is_admin' => 1,
            'chapter_id' => 1,
            'email' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'izunia',
            'username' => 'izunia',
            'is_admin' => 0,
            'chapter_id' => 1,
            'email' => 'izunia',
            'password' => Hash::make('tuptup'),
        ]);
    }
}
