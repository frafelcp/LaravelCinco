<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UploadUserForm extends FormRequest
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
            'type' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ];
    }
}
