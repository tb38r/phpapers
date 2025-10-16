<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Workspace;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Papers>
 */
class PaperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'workspace_id' => Workspace::factory(),
            'title' => ucfirst($this->faker->bs),
        ];
    }
}
