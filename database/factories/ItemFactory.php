<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'user_id' => function(){
                return User::factory()->create()->id;
            },
            'status' => $this->faker->randomElement(['新品','中古']),
            'type' => $this->faker->randomElement([1,2,3]),
            'detail' => $this->faker->sentence(),
        ];
    }
}
