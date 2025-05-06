<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'username' => 'user1',
        //     'password' => bcrypt('password1'),
        //     'active' => true,
        // ]);

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
