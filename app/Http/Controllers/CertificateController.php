<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Certificate;
use Illuminate\Http\Response;
use App\Services\CertificateService;
use App\Http\Requests\CertificateRequest;

class CertificateController extends Controller
{
    public function __construct(
        private readonly CertificateService $certificateService
    ) {
    }

    public function index(): View
    {
        return view('home');
    }

    public function generate(CertificateRequest $request): Response
    {
        // Save certificate
        $certificate = Certificate::query()->create($request->validated());

        // Generate PDF
        return $this->certificateService->generate($certificate->toArray());
    }

    public function show(string $certificateNumber): Response
    {
        // Find certificate
        $certificate = Certificate::query()->where('certificate_number', $certificateNumber)->firstOrFail();

        // Generate PDF
        return $this->certificateService->generate($certificate->toArray());
    }
}
