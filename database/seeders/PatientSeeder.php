<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Records;
use Illuminate\Database\Seeder;

/**
 * @extends Seeder<Patient>
 */
class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::factory()
            ->has(
                Records::factory()->count(3),
                'records'
            )
            ->count(10)
            ->create();
    }
}
