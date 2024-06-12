<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Admin',
                'email' => 'super-admin@example.com',
                'password' => '$2y$12$0iClmN3rR0ZLNIu3FZ2PyOlT/UPlbXMvJ8kWeCqIr3z5lIfzj0T3C', // password
                'remember_token' => NULL,
                'created_at' => '2024-06-12 01:00:00',
                'updated_at' => '2024-06-12 01:00:00'
            ],
            [
                'name' => 'Admin2',
                'email' => 'super-admin2@example.com',
                'password' => '$2y$12$0iClmN3rR0ZLNIu3FZ2PyOlT/UPlbXMvJ8kWeCqIr3z5lIfzj0T3C', // password
                'remember_token' => NULL,
                'created_at' => '2024-06-12 01:00:00',
                'updated_at' => '2024-06-12 01:00:00'
            ],
        ];

        \App\Models\Admin::upsert(
            $admins,
            ['email'], // The unique key(s) to check for existing records
            ['name'] // The columns to update if a match is found
        );
    }
}
