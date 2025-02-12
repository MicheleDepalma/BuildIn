<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\Ad::class;
    public function definition(): array
    {
        return [
            'categories' => $this->faker->randomElement([ 'Lavori Privati', 'Appalti', 'Subappalti', 'Chiavi in Mano']),
            'subCategories' => $this->faker->randomElement(['Materiali', 'Edilizia', 'Servizi Tecnici', 'Traslochi']),
            'city' => $this->faker->city(),
            'budgetMin' => $this->faker->randomFloat(null, 50, 10000),
            'budgetMax' => $this->faker->randomFloat(null, 50, 10000),
            'squareMeters' => $this->faker->randomFloat(null, 30, 200),
            'description' => $this->faker->paragraph(),
            'title' => $this->faker->sentence(),
            //'imageId' => json_encode([$this->faker->imageUrl()]),
            'serviceType' => $this->faker->randomElement(['Ristrutturazione', 'Manutenzione']),
            'buildingCategories' => $this->faker->randomElement(['Residenziale', 'Capannone', 'Negozi - Locali commerciali', 'Palazzi - Edifici','Ufficio']),
            'localCategories' => $this->faker->randomElement(['Monolocale', 'Bilocale', 'Trilocale', 'Quadrilocale', 'Villa', 'Palazzina']),
            'address' => $this->faker->streetAddress(),
            'cap' => $this->faker->postcode(),
            'usersId' => \App\Models\User::inRandomOrder()->first()->id,
            'recipientId' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }  
}
