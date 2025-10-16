<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workspace>
 */
class WorkspaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $activities = ['Study', 'Travel', 'Leisure', 'Work', 'Exercise', 'Shopping', 'Cooking', 'Reading', 'Gaming', 'Relaxing'];
        return [
            'name' => $this->faker->userName(),
            'description' =>  $this->faker->randomElement($activities),


        ];
    }
}
