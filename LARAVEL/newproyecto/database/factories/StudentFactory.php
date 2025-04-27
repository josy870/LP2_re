<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = \App\Models\Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'code' => $this->faker->unique()->numerify('STD###'),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'document' => $this->faker->unique()->bothify('??###'),
            'email' => $this->faker->unique()->safeEmail,
            'cellphone' => $this->faker->phoneNumber,
            'birthdate' => $this->faker->date(),
        ];
    }
}
