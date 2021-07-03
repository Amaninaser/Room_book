<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'arrival'           =>   $this->date,
            'departure'         =>   $this->date,
            'details'           =>   $this->faker->text(100),
            'total_price'       =>   $this->faker->numberBetween(10, 500),
            'guest_id'          =>   2,
            'room_no'           =>   $this->faker->numberBetween(100, 200),
            'bed_total'         =>   $this->faker->numberBetween(1, 5),
            'user_id'           =>   $this->faker->numberBetween(1, 5),
            'room_id'           =>   1,
            'num_of_guests'     =>   $this->faker->numberBetween(1, 6),
        ];
    }
}
