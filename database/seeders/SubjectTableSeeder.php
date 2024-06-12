<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'title' => 'Physics',
            ],
            [
                'title' => 'Chemistry',
            ],
        ];

        foreach ($subjects as $subject) {
            Subject::updateOrCreate(
                ['title' => $subject['title']],
                ['title' => $subject['title']],
            );
        }
    }
}
