<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFranchiseRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' =>  'required|email',
            'phone' => 'required',
            'country' => 'required',
            'hear_about_us' => 'nullable',
            'address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'nationality' => 'required',
            'ever_run_options' => 'nullable',
            'food_experience' => 'required',
            'start_options' => 'required',
            'level_of_investment' => 'nullable',
            'type_of_development_interest' => 'nullable',
            'content' => 'nullable',
            'phone_with_cc' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }
}
