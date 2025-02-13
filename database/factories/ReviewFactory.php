<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = \App\Models\Review::class;

    public function definition(): array
    {
        $user_id = User::where('id', '!=', 1)->inRandomOrder()->first()->id;
        $recipient_id = User::whereNotIn('id', [$user_id, 1])->inRandomOrder()->first()->id;
        
        return [
            'user_id'=> $user_id,
            'recipient_id' => $recipient_id,
            'vote' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->paragraph(),
        ];
    }
}
