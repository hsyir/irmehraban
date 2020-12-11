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

        $tags = collect([
            "در آستانه ازدواج",
            "در انتظار جهیزیه",
            "محصل با استعداد",
            "فقر مالی شدید",
            "دارای مشکل تنفسی",
            "محصل",
            "دانشجو",
            "بحران روحی",
            "خانوار پر جمعیت",
            "استعداد درخشان",
            "دارای معلولیت",
        ]);

        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'emotional_text' => $this->faker->realText(100),
            'about' => $this->faker->realText(500),
            'bank_id' => $this->faker->bankAccountNumber,
            'needs' => $this->faker->realText(30),
            'birth_date' => $this->faker->dateTimeBetween("-18 years", "-1 years"),
            'priority' => random_int(1, 9),
            'tags' => $tags->shuffle()->skip(random_int($tags->count()-6,$tags->count()-2))->toArray(),
        ];
    }
}
