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
            'userId' => \App\Models\User::inRandomOrder()->first()->id,
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'nameCompany' => $this->faker->company(),
            'pIva' => $this->faker->unique()->numerify('IT###########'),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'cap' => $this->faker->postcode(),
            'pec' => $this->faker->unique()->safeEmail(),
            'sdi' => $this->faker->bothify('??######'),
            'siteLink' => $this->faker->url(),
            'state' => $this->faker->country(),
            'currency' => $this->faker->currencyCode(),
            'mobileNumber' => $this->faker->phoneNumber(),
        ];
    }
}
