<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word(5,true),
            'option_1'=>$this->faker->word(4,true),
            'option_2'=>$this->faker->word(4,true),
            'option_3'=>$this->faker->word(4,true),
            'option_4'=>$this->faker->word(4,true),
            'right_answer'=>3
        ];
    }
}
