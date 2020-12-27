<?php

namespace Database\Factories;

use App\Models\GlobalVars;
use Illuminate\Database\Eloquent\Factories\Factory;

class GlobalVarsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GlobalVars::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_rooms' => 5,
        ];
    }
}