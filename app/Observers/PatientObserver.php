<?php
declare(strict_types=1);

namespace App\Observers;

use App\Models\Patient;
use Illuminate\Support\Facades\Log;

class PatientObserver
{
    public bool $afterCommit = true;

    /**
     * Handle the Patient "created" event.
     */
    public function created(Patient $patient): void
    {
        if ($patient->wasRecentlyCreated) {
            Log::info('Patient created', ['id' => $patient->id]);
        } else {
            Log::info('Patient updated', ['id' => $patient->id]);
        }
    }
}
