<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'user2',
                'password' => bcrypt('password2'),
            ],
            [
                'username' => 'user3',
                'password' => bcrypt('password3'),
            ],
            [
                'username' => 'user4',
                'password' => bcrypt('password4'),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
