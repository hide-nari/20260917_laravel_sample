<?php

namespace Database\Factories;

use App\Models\department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class departmentFactory extends Factory
{
    protected $model = department::class;

    public function definition(): array
    {
        return [
            'name'       => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
