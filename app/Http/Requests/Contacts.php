<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contacts extends FormRequest
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
            'contact_f_name' =>'required|min:55',
            'contact_l_name' =>'required|max:55',
            'contact_work_email' =>'required|email|max:90',
        ];
    }
    public function messages()
    {
        return [
            'contact_f_name.required' => 'Please enter valid First Name',
            'contact_f_name.min' => 'Please enter valid  length of First Name',
            'contact_work_email.email' => 'Please enter valid email address',
            'contact_work_email.required' => 'Please enter valid email address',
            'contact_work_email.max' => 'Please enter valid email address',
        ];
    }
}
