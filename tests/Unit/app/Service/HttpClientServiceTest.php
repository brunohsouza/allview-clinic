<?php
declare(strict_types=1);

namespace Tests\Unit\app\Service;

use App\Service\HttpClientService;
use PHPUnit\Framework\MockObject\Exception;

class HttpClientServiceTest extends AbstractTestCase
{
    private HttpClientService $httpClientService;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->httpClientService = new HttpClientService($this->client);
    }

    /**
     * @dataProvider sendSmsDataProvider
     * @group http-client
     * @param string $patientId
     * @param string $phone
     * @param string $message
     * @return void
     * @throws \Exception
     */
    public function testSendSmsWithSuccess(
        string $patientId,
        string $phone,
        string $message
    ): void
    {
        $this->mockRequest(200, 'post', '{"message": "SMS sent successfully"}');

        $response = $this->httpClientService->sendSms($patientId, $phone, $message);

        $this->assertEquals(200, $response['status']);
        $this->assertEquals('{"message": "SMS sent successfully"}', $response['body']);
    }

    public static function sendSmsDataProvider(): \Generator
    {
        yield 'happy-path' => [
            'patientId' => '1',
            'phone' => '123456789',
            'message' => 'Hello, John. Your appointment is coming up on 23/07/2023 at 10:00 AM.',
        ];

        yield 'happy-path-with-different-user' => [
            'patientId' => '2',
            'phone' => '987654321',
            'message' => 'Hello, Jane. Your appointment is coming up on 23/07/2023 at 10:00 AM.',
        ];
    }

    /**
     * @dataProvider sendSmsDataProviderWithInvalidPayload
     * @group http-client
     * @param string $patientId
     * @param string $phone
     * @param string $message
     * @param int $statusCode
     * @param string $exceptionMessage
     * @param string $exceptionClass
     * @return void
     * @throws \Exception
     */
    public function testSendSmsWithFailure(
        string $patientId,
        string $phone,
        string $message,
        int $statusCode,
        string $exceptionClass
    ): void
    {
        $this->mockRequestException('post', $exceptionClass);
        $this->expectException($exceptionClass);

        $this->httpClientService->sendSms($patientId, $phone, $message);
    }

    public static function sendSmsDataProviderWithInvalidPayload(): \Generator
    {
        yield 'server-error' => [
            'patientId' => '111',
            'phone' => '123456789',
            'message' => 'Hello, John. Your appointment is coming up on 23/07/2023 at 10:00 AM.',
            'statusCode' => 400,
            \Exception::class,
        ];
    }
}
