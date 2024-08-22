<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');

        .cursive {
            font-family: 'Open Sans', sans-serif, cursive;
        }

        .sans {
            font-family: 'Open Sans', sans-serif;
        }

        .block {
            display: block;
        }

        .underline {
            border-bottom: 1px solid #777;
            padding: 5px;
            margin-bottom: 15px;
        }

        body {
            padding: 20px 0;
        }

        .title {
            font-size: 40px;
            text-align: center;
            margin: 40px 0;
            font-style: italic;
        }

        .small-title {
            font-size: 18px;
            text-align: center;
            margin: 35px 0 0 0;
            font-style: italic;
        }

        .qr-code {
            margin-top: 50px;
        }

        .background {
            border: 1px solid #E1E5F0;
            background-color: #618597;
            padding: 4px;
        }

        .background-outer {
            border: 2px solid #fff;
            background-color: #618597;
            padding: 20px;
        }

        .background-inner {
            border: 2px solid #fff;
            background-color: #618597;
            padding: 4px;
        }

        .container {
            background: #fff;
            padding: 10px;
        }

        .container-center {
            text-align: center;
        }

        .student-name, .course-name {
            font-size: 20px;
            padding: 0 20% 4px;
            display: inline-block;
            font-family: 'Open Sans', sans-serif;
        }

        .student-name {
            margin-top: 15px;
        }

        .course-name {
            margin-top: 4px;
        }

        .certificate-number, .qr-code, .course-completion-date {
            width: 33%;
            float: left;
            margin-top: 40px;
            text-align: center;
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .certificate-number-title, .course-completion-date-title, .description {
            text-align: center;
            font-size: 15px;
            font-family: 'Open Sans', sans-serif;
        }

        .description {
            margin-top: 10px;
            border-bottom: 1px solid #777;
        }
    </style>
    <title>Certificate</title>
</head>
<body>
<div class="background">
    <div class="background-outer">
        <div class="background-inner">
            <div class="container">
                <div class="title cursive">Course completion certificate</div>

                <div class="container-center">
                    <div class="student-name underline">{{ $student_name }}</div>
                </div>

                <div class="small-title cursive">Course name:</div>
                <div class="container-center">
                    <div class="course-name underline">{{ $course_name }}</div>
                </div>

                <div class="container clearfix">
                    <div class="certificate-number">
                        <div class="certificate-number-title block sans">Certificate number:</div>
                        <div class="description">{{ $certificate_number }}</div>
                    </div>
                    <div class="qr-code">
                        <img src="data:image/png;base64,{{ $qr_code_path }}" alt="QR Code of certificate" width="100px"
                             height="100px">
                    </div>
                    <div class="course-completion-date">
                        <div class="course-completion-date-title">Course completion date:</div>
                        <div class="description">{{ $course_completion_date }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
