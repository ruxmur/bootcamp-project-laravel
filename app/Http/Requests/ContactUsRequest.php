<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactUsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstName' => ['min:2', 'required', 'string'],
            'lastName' => ['min:2', 'required', 'string'],
            'email' => ['string', 'email', 'required'],
            'tel' => ['string', 'tel', 'required'],
            'sex' => ['required', 'string', Rule::in(['female', 'male'])],
            'membership' => ['required', 'string', Rule::in(['trial', 'standart', 'premium'])],
            'sport' => ['required', 'string', Rule::in(['Aerobic exercise', 'Box', 'Cardio', 'CrossFit', 'Stretching', 'Strenght training', 'Yoga'])],
            'coach'  => ['required', 'string', Rule::in(['Alex', 'Kevin', 'Lana', 'Mark', 'Rockwell', 'Ruth', 'Tom'])],
            'message' => ['required', 'string', 'min:10'],

        ];

    }
}
