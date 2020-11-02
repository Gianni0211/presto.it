<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnouncementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Announcement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           /*  'title' => $this->faker->realText($maxNbChars = 30, $indexSize = 2),
            'body' => $this->faker->realText($maxNbChars = 60, $indexSize = 2),
            'user_id' =>  1,
            'category_id' =>  1 */
        ];
    }
}
