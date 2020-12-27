<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Bookings;
use Illuminate\Database\Eloquent\Factories\Factory;


class BookingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bookings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'name' => $this->faker->name,
            'status' => $this->faker->randomElement(['reserved', 'out']),
        ];
    }
}