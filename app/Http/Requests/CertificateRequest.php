<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'certificate_number' => 'required|string|unique:certificates|min:1|max:25',
            'course_name' => 'required|string|min:2|max:255',
            'student_name' => 'required|string|min:3|max:25',
            'course_completion_date' => 'required|date',
        ];
    }
}
