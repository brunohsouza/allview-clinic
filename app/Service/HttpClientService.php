<?php
declare(strict_types=1);

namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HttpClientService
{
    private const STUB_SERVER_BASE_URL = 'http://allview_stub_server:8080';
    private const STUB_SERVER_SEND_SMS_ENDPOINT = '/patient/sms';

    public function __construct(private Client $client)
    {
    }

    /**
     * Send a request to the SMS server to send a message to a patient.
     */
    public function sendSms(string $patientId, string $phone, string $message): array
    {
        try {
            $body = [
                'patientId' => $patientId,
                'phone' => $phone,
                'message' => $message,
            ];

            $request = $this->client->post(
                self::STUB_SERVER_BASE_URL . self::STUB_SERVER_SEND_SMS_ENDPOINT,
                [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
                        'X-Api-Key' => 'blablabla',
                    ],
                    'json' => $body,
                ]
            );

            return ['status' => $request->getStatusCode(), 'body' => $request->getBody()->getContents()];
        } catch (GuzzleException $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
