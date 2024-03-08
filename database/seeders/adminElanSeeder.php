<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminElanSeeder extends Seeder
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
            'username' => 'sekrefater',
            'email' => 'elandramaulana81@gmail.com',
            'password' => Hash::make('12345678'),
            // Add more columns and values as needed
        ]);
    }
}
