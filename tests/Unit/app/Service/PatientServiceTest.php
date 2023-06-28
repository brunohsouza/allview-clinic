<?php
declare(strict_types=1);

namespace Tests\Unit\app\Service;

use App\Models\Patient;
use App\Service\HttpClientService;
use App\Service\PatientService;

class PatientServiceTest extends AbstractTestCase
{
    private PatientService $patientService;

    protected function setUp(): void
    {
        parent::setUp();
        $httpClientService = $this->createMock(HttpClientService::class);
        $this->patientService = new PatientService($httpClientService);
    }

    /**
     * @dataProvider patientDataProvider
     * @group patient
     * @param string $name
     * @param string $phone
     * @param string $email
     * @return void
     */
    public function testStore(string $name, string $phone, string $email): void
    {
        $result = $this->patientService->store($name, $phone, $email);

        $this->assertInstanceOf(Patient::class, $result);
        $this->assertEquals($name, $result->name);
        $this->assertEquals($phone, $result->phone);
        $this->assertEquals($email, $result->email);
    }

    /**
     * @dataProvider patientDataProvider
     * @group patient
     * @param string $name
     * @param string $phone
     * @param string $email
     * @return void
     * @throws \Exception
     */
    public function testGetPatient(string $name, string $phone, string $email): void
    {
        $patient = $this->patientService->store($name, $phone, $email);
        $result = $this->patientService->getPatient((string) $patient->id);

        $this->assertInstanceOf(Patient::class, $patient);
        $this->assertIsArray($result);
        $this->assertEquals($name, $result['name']);
        $this->assertEquals($phone, $result['phone']);
        $this->assertEquals($email, $result['email']);
    }

    /**
     * @dataProvider patientDataProvider
     * @group patient
     * @param string $name
     * @param string $phone
     * @param string $email
     * @return void
     * @throws \Exception
     */
    public function testSendSms(string $name, string $phone, string $email): void
    {
        $patient = $this->patientService->store($name, $phone, $email);
        $result = $this->patientService->sendSms((string) $patient->id);

        $this->assertIsArray($result);
        $this->assertStringContainsString('success', $result['status']);
    }

    public static function patientDataProvider(): \Generator
    {
        yield 'happy-path' => [
            'name' => 'John Doe',
            'phone' => '123456789',
            'email' => 'johndoe@example.com',
        ];
    }
}
