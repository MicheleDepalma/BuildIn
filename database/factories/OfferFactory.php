<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\Offer::class;
    
    public function definition(): array
    {
        return [
            'adsId' => \App\Models\Ad::inRandomOrder()->first()->id,
            'usersId' => \App\Models\User::inRandomOrder()->first()->id,
            'recipientId' => \App\Models\User::inRandomOrder()->first()->id,
            'ammount'=> $this->faker->randomFloat(null, 50, 10000),
            'workStartDate'=> Carbon::now()->subDays(rand(0, 365)),
            'workEndDate' => Carbon::now()->subDays(rand(0, 365)),
        ];
    }
}
