<?php

namespace Database\Factories;

use App\Models\department;
use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class employeeFactory extends Factory
{
    protected $model = employee::class;

    public function definition(): array
    {
        return [
            'name'       => $this->faker->name(),
            'email'      => $this->faker->unique()->safeEmail(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'department_id' => department::get()->random()->id,
        ];
    }
}
