<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
            'user_id' => User::where('id', '!=', 1)->inRandomOrder()->first()->id,
            'categories' => $this->faker->randomElement([ 'Lavori Privati', 'Appalti', 'Subappalti', 'Chiavi in Mano']),
            'sub_categories' => $this->faker->randomElement(['Materiali', 'Edilizia', 'Servizi Tecnici', 'Traslochi']),
            'city' => $this->faker->city(),
            'budget_min' => $this->faker->randomFloat(null, 50, 10000),
            'budget_max' => $this->faker->randomFloat(null, 50, 10000),
            'square_meters' => $this->faker->randomFloat(null, 30, 200),
            'description' => $this->faker->paragraph(),
            'title' => $this->faker->sentence(),
            //'image_id' => json_encode([$this->faker->imageUrl()]),
            'service_type' => $this->faker->randomElement(['Ristrutturazione', 'Manutenzione']),
            'building_categories' => $this->faker->randomElement(['Residenziale', 'Capannone', 'Negozi - Locali commerciali', 'Palazzi - Edifici','Ufficio']),
            'local_categories' => $this->faker->randomElement(['Monolocale', 'Bilocale', 'Trilocale', 'Quadrilocale', 'Villa', 'Palazzina']),
            'address' => $this->faker->streetAddress(),
            'cap' => $this->faker->postcode(),
        ];
    }  
}
