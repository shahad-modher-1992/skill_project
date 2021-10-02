<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>json_encode([
                'en'=>$this->faker->word(),
                'ar'=>$this->faker->word(),
            ]),
            'desc'=>json_encode([
                'en'=>$this->faker->text(10),
                'ar'=>$this->faker->text(10),
            ]),
            'image'=>"exams/1.png",
            'question_number'=>4,
            'difficult'=>2,
            'duration_min'=>30,

        ];
    }
}
