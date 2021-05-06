<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dot_number' => $this->faker->randomNumber($nbDigits = 8, $strict = true),
            'premium_amount'=>$this->faker->numberBetween($min = 100, $max = 1500),
            'premium_tax'=>$this->faker->numberBetween($min = 10, $max = 300),
            'premium_total'=>$this->faker->numberBetween($min = 110, $max = 1800),
            'street'=>$this->faker->streetAddress(),
            'city'=>$this->faker->city(),
            'state'=>$this->faker->state(),
            'zipcode'=>$this->faker->postcode(),
            'driver1_name'=>$this->faker->name(),
            'driver1_age'=>rand(21,70),
            'driver2_name'=>$this->faker->name(),
            'driver2_age'=>rand(21,70),
            'driver3_name'=>$this->faker->name(),
            'driver3_age'=>rand(21,70),
            'driver4_name'=>$this->faker->name(),
            'driver4_age'=>rand(21,70),
            'driver5_name'=>$this->faker->name(),
            'driver5_age'=>rand(21,70),
            'user_id'=>User::pluck('id')->random(),
        ];
    }
}
