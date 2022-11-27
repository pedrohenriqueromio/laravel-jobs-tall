<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Job::class ;
    
    public function definition()
    {
        return [
            'name'  => $this->faker->jobTitle,
            'email' => $this->faker->safeEmail(),
            'salary' => $this->faker->numberBetween(100, 999),
            'currency' => 'Real',
            'description' => $this->faker->text(200),
        ];
    }
}
