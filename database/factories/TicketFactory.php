<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = \App\Models\Ticket::class;


    public function definition(): array
    {
        return [
            'user_id' => User::where('id', '!=', 1)->inRandomOrder()->first()->id,
            'state' => $this->faker->randomElement(['nuovo', 'in lavorazione', 'chiuso']),
            'revisor_id' => 1,
            'modified_date' => Carbon::now()->subDays(rand(0, 365)),
            'request' => $this->faker->paragraph(),
        ];
    }
}
