<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $numberOfStudents = 100;

        for ($i = 0; $i < $numberOfStudents; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
