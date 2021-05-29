<?php

namespace Database\Factories;

use App\Models\tweets;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tweets::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'text' => $this->faker->word(3) // kope mazak par 3 vardiem
        ];
    }
}
