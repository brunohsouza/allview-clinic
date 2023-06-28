<?php
declare(strict_types=1);

namespace App\Service;

use App\Models\Dto\PatientDto;
use App\Models\Patient;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PatientService
{
    public function __construct(private readonly HttpClientService $httpClientService)
    {
    }

    public function store(string $name, string $phone, string $email): Patient
    {
        return Patient::factory()->create([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
        ]);
    }

    /**
     * @throws \Exception
     */
    public function getPatient(string $id): ?array
    {
        try {
            if (!$result = Patient::with('records')->find($id)) {
                throw new NotFoundHttpException('Patient not found.');
            }

            return $result->toArray();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @throws \Exception
     */
    public function sendSms(string $patientId): array
    {
        try {
            $patient = PatientDto::populate($this->getPatient($patientId));
            $this->httpClientService->sendSms(
                $patient->getId(),
                $patient->getPhone(),
                'Hello, ' . $patient->getName() . '. Your appointment is coming up on 23/07/2023 at 10:00 AM.'
            );

            return ['status' => 'success'];
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
