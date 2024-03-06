<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdressBook>
 */
class AdressBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' =>$this->faker->firstName(),
            'city' =>$this->faker->city,
            'adress' =>$this->faker->address,
            'email' =>$this->faker->email,
            'PersonalNumber' =>$this->faker->numberBetween(),
            'WorkNumber' =>$this->faker->numberBetween(),
            'AdditionalNumber' => $this->faker->numberBetween(),
        ];
    }
}
