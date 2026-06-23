<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'          => 'required|string|max:255',
            'gurdian_name'  => 'required|string|max:255',
            'address'       => 'required|string|max:500',
            'gender'        => 'required|in:Male,Female,Other',
            'email_id'      => 'required|email|max:255|unique:students,email_id,' . $this->route('student'),
            'phone_no'      => 'required|string|min:10|max:15',
            'dob'           => 'required|date|before:today',
        ];
    }


}
