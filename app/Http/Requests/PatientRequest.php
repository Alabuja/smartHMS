<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|unique:users',
            'password' => 'required',
            'address' => 'nullable|max:200',
            'birth_date' => 'required|date',
            'blood_group' => 'required',
            'genotype' => 'required',
            'sex' => 'required',
            'avatar' => 'required|mimes:jpg,png,jpeg,gif|between:1,10000',
        ];
    }
}
