<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Http\Response;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

readonly class CertificateService
{
    public function generate(array $data): Response
    {
        // Generate QrCode
        $qrCodePath = "qrcode-{$data['certificate_number']}.svg";
        QrCode::format('svg')->size(100)->generate(
            url("/certificates/{$data['certificate_number']}"),
            Storage::disk('public')->path($qrCodePath)
        );

        // Format data
        $data['course_completion_date'] = Carbon::parse($data['course_completion_date'])->format('d-m-Y');
        $data['qr_code_path'] = base64_encode(Storage::disk('public')->get($qrCodePath));

        // Create certificate PDF
        $pdf = Pdf::loadView('certificate.template', $data);

        // Delete tmp QrCode
        Storage::disk('public')->delete($qrCodePath);

        return $pdf->download('certificate.pdf');
    }
}
