<?php
declare(strict_types=1);

namespace Tests\Unit\app\Service;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Artisan;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use Tests\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

abstract class AbstractTestCase extends TestCase
{
    protected Client&MockObject $client;

    protected ResponseInterface&MockObject $response;

    protected StreamInterface&MockObject $streamInterface;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:fresh');
        $this->client = $this->createMock(Client::class);
        $this->response = $this->createMock(ResponseInterface::class);
        $this->streamInterface = $this->createMock(StreamInterface::class);
    }

    protected function mockRequest(int $statusCode, string $method, string $body): void
    {
        $this->response->method('getStatusCode')->willReturn($statusCode);
        $this->streamInterface->method('getContents')->willReturn($body);
        $this->response->method('getBody')->willReturn($this->streamInterface);
        $this->client->method($method)->willReturn($this->response);
    }

    protected function mockRequestException(string $method, string $exception): void
    {
        $exception = $this->createMock($exception);
        $this->client->method($method)->willThrowException($exception);
    }
}
