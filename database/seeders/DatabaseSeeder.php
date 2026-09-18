<?php

namespace Database\Seeders;

use App\Models\department;
use App\Models\employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        for ($i = 1; $i <= 10; $i++) {
            Department::create([
                'name' => '営業'.$i.'部',
            ]);
        }
        for ($i = 1; $i <= 10; $i++) {
            Department::create([
                'name' => '管理'.$i.'部',
            ]);
        }
        for ($i = 1; $i <= 10; $i++) {
            Department::create([
                'name' => 'システム'.$i.'部',
            ]);
        }

        Employee::factory(30)->create();
    }
}
