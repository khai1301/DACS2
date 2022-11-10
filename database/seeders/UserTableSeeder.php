<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email' => 'admin@gmail.com',
                'name' => 'Phan Ngọc Khải',
                'password' => bcrypt('admin'),
                'level'=> 1
            ]
        ];

        DB::table('vp_users')->insert($data);
    }
}
