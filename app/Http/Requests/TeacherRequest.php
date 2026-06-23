<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          

            'name' => 'required|string|max:255',

            'subject' => 'required|string|max:255',

            'qualification' => 'required|string|max:255',

            'phone_no' => 'required|digits:10|unique:teachers,phone_no',

            'email' => 'required|email|unique:teachers,email',

            'salary' => 'required|numeric|min:0',

            'gender' => 'required|in:Male,Female,Other',

       
        ];
    }
}
