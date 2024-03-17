<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            'مهندس نرم‌افزار',
            'طراح وب',
            'مدیر پروژه',
            'کارشناس فروش',
        ];

        foreach ($jobs as $job) {
            Category::create(['title' => $job]);
        }

    }
}
