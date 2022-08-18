<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
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
            'date' => $this->faker->date(),
            'title' => $this->faker->text(),
            'author' => $this->faker->text(),
            'p1' => $this->faker->paragraph(),
            'p2' => $this->faker->paragraph(),
            'p3' => $this->faker->paragraph(),
            'p4' => $this->faker->paragraph(),
            'p5' => $this->faker->paragraph(),
            'img_banner' => $this->faker->text(10),
            'img_highlight1' => $this->faker->text(10),
            'img_highlight2' => $this->faker->text(10),
            'img_highlight3' => $this->faker->text(10),
            'img_highlight4' => $this->faker->text(10),
            'img_highlight5' => $this->faker->text(10),
            'user_id' => $this->faker->randomElement($userIds),
        ];
    }
}
