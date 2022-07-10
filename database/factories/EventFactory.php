<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userIds = User::pluck('id')->all();
        return [
            'name' => $this->faker->name(),
            'location' => $this->faker->address(),
            'description' => $this->faker->address(),
            'artist' => $this->faker->name(),
            'yt_url' => $this->faker->sentence(),
            'user_id' => $this->faker->randomElement($userIds),
            'date' => $this->faker->date


        ];
    }
}
