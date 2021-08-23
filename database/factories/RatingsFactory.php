<?php

namespace Database\Factories;

use App\Models\Ratings;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ratings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'mark' => $this->faker->numberBetween(0,5),
        //     'content' => $this->faker->paragraph(3),
        // ];
    }
}
