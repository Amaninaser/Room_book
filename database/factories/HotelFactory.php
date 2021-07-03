<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'               =>    $this->faker->text(20),
            'location'           =>    $this->faker->text(55),
            'description'        =>    $this->faker->text(100),
           // 'image'            =>   'https://placeimg.com/640/480/arch',
           'image'             =>   'img_1' . '.jpg',
        ];
    }
}
