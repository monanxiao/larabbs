<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
        $sentence = $this->faker->sentence();// 话题标题

        return [
            'title' => $sentence,
            'body' => $this->faker->text(), // 小段文本
            'excerpt' => $sentence, // 摘录
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]), // 用户ID
            'category_id' => $this->faker->randomElement([1, 2, 3, 4]), //　分类ID
        ];
    }
}
