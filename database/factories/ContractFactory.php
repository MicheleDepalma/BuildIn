<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Ad;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = \App\Models\Contract::class;


    public function definition(): array
    {

        $ad = Ad::inRandomOrder()->first();
        $user_id = $ad->user_id;
        $recipient_id = User::whereNotIn('id', [$user_id, 1])->inRandomOrder()->first()->id;

        return [

            'ad_id' => $ad->id,
            'state' => $this->faker->randomElement(['Confermato', 'Non Confermato']),
            'work_start' => Carbon::now()->subDays(rand(0, 365)),
            'work_end' => Carbon::now()->subDays(rand(0, 365)),
            'ammount' => $this->faker->randomFloat(null, 50, 10000),
            'state_payment' => $this->faker->randomElement(['Pagato', 'Non Pagato']),
            //'attachment_id',
            'user_id' => $user_id,
            'recipient_id' => $recipient_id,
        ];
    }
}
