<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin1 = new User();
        $admin1->username = 'majid_zanjiran';
        $admin1->email = 'oosmajid@gmail.com';
        $admin1->password = ('majid@98712');
        $admin1->name = 'Majid Zanjiran';
        $admin1->save();

        $admin2 = new User();
        $admin2->username = 'mh_javan';
        $admin2->email = 'mh.javan.teacher@gmail.com';
        $admin2->password = ('javan@3456');
        $admin2->name = 'Mohammad Hossein Javan';
        $admin2->save();
    }
}
