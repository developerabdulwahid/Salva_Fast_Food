<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ReCaptchaRule;

class FranchiseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = ['name' => ['required', 'min:3', 'max:25'],
        'email' => ['required', 'email'],
        'message' => ['min:10'],
        'recaptcha_token' => ['required', new   ReCaptchaRule($this->recaptcha_token)]
        ];
    
        return $rules;
    }
}
