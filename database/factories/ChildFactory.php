<?php

namespace Database\Factories;

use App\Classes\FakerProviders\PersianFaker;
use App\Models\Child;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ChildFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Child::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new PersianFaker($this->faker));

        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'emotional_text' => $this->faker->realText(100),
            'about' => $this->faker->realText(500),
            'needs' => $this->faker->realText(30),
            'birth_date' => $this->faker->dateTimeBetween("-18 years","-1 years"),
            'priority' => random_int(1,9),
        ];
    }
}
