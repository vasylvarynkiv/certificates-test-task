<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
        }

        .details {
            margin-top: 30px;
            font-size: 18px;
        }

        .qr-code {
            margin-top: 50px;
        }
    </style>
    <title>Сertificate</title>
</head>
<body>
<div class="title">
    Course completion certificate
</div>
<div class="details">
    Сertificate number: {{ $certificate_number }}<br>
    Course name: {{ $course_name }}<br>
    Student name: {{ $student_name }}<br>
    Course completion date: {{ $course_completion_date }}<br>
</div>
<div class="qr-code">
    <img src="data:image/png;base64,{{ $qr_code_path }}" alt="QR Code of certificate">
</div>
</body>
</html>
