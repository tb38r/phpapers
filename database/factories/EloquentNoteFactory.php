<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Paper;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EloquentNote>
 */
class EloquentNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'paper_id' => Paper::factory(), 
            'content' => $this->faker->realText(50), 
        ];
    }
}
