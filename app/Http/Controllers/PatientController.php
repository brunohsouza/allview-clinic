<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Service\PatientService;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class PatientController extends Controller
{
    public function __construct(private readonly PatientService $patientService)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $this->patientService->store(
                $request->get('name'),
                $request->get('phone'),
                $request->get('email')
            );

            return \response()->json([
                'message' => 'Patient created successfully',
            ], ResponseAlias::HTTP_CREATED);
        } catch (QueryException $e) {
            return \response()->json([
                'message' => 'Patient creation failed. Please, check your input data.',
                'code' => $e->getCode(),
            ], ResponseAlias::HTTP_BAD_REQUEST);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $patientId): JsonResponse
    {
        try {
            return \response()->json($this->patientService->getPatient($patientId));
        } catch (\Exception) {
            return \response()->json([
                'message' => 'Patient not found.',
            ], ResponseAlias::HTTP_NOT_FOUND);
        }
    }

    /**
     * Send SMS to the specified patient.
     */
    public function sendSms(string $patientId): JsonResponse
    {
        try {
            $request = $this->patientService->sendSms($patientId);

            return \response()->json($request);
        } catch (\Exception) {
            return \response()->json([
                'message' => 'Failed to send SMS.',
            ], ResponseAlias::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
