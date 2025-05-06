<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        // $users = [
        //     [
        //         'username' => 'user2',
        //         'password' => bcrypt('password2'),
        //     ],
        //     [
        //         'username' => 'user3',
        //         'password' => bcrypt('password3'),
        //     ],
        //     [
        //         'username' => 'user4',
        //         'password' => bcrypt('password4'),
        //     ],
        // ];
        // DB::table('users')->insert($users);

        // 3. add random data
        for ($i = 0; $i < 10; $i++) {
            $users[] = [
                'username' => 'user' . Str::random(10),
                'password' => bcrypt('password'),
            ];
        }
        DB::table('users')->insert($users);
    }
}
