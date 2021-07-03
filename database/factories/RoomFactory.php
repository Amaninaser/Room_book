<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room_name'         =>   'Superior Room',
            'bedding'           =>   'Single',
            'description'       =>   $this->faker->text(300),
            'current_price'     =>   $this->faker->numberBetween(100, 400),
            'Is_active'         =>   'Active',
            'hotel_id'          =>   1,
            'max_guest'         =>   $this->faker->numberBetween(1, 6),
            'image'             =>   'g_' . $this->faker->unique()->numberBetween(1, 8) . '.jpg',
            'children'          =>   $this->faker->numberBetween(1, 5),
            'adults'            =>   $this->faker->numberBetween(1, 5),
            'reviwes'           =>   $this->faker->numberBetween(1, 200),
            'stars'             =>   $this->faker->numberBetween(1, 5),

        ];
    }
}
