<?php
declare(strict_types=1);

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Records;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Records>
 */
class RecordsFactory extends Factory
{
    /**
     * @var string The name of the factory's corresponding model.
     */
    protected $model = Records::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'description' => fake()->sentence(),
            'created_at' => now(),
        ];
    }
}
