<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert(
            [
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make("password")
            ],
        );
    }
}
