<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
            'email' =>  'required',
            'phone' => 'nullable',
            'enquiry' => 'required',
            'resturant' => 'required',
            'dine_take_delivery' => 'nullable',
            'upload_image' => 'nullable',
            'phone_with_cc' => 'nullable',
            'content' => 'required',
            'image1' => 'nullable',
            'image2' => 'nullable',
            'image3' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }
}
