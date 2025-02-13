<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInformation>
 */
class UserInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\UserInformation::class;

    public function definition(): array
    {
        return [
            'user_id' => null,
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'name_company' => $this->faker->company(),
            'p_iva' => $this->faker->unique()->numerify('IT###########'),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'cap' => $this->faker->postcode(),
            'pec' => $this->faker->unique()->safeEmail(),
            'sdi' => $this->faker->bothify('??######'),
            'site_link' => $this->faker->url(),
            'state' => $this->faker->country(),
            'currency' => $this->faker->currencyCode(),
            'mobile_number' => $this->faker->phoneNumber(),
        ];
    }
}
