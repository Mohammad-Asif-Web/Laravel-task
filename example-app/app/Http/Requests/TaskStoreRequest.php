<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|min:5|string',
            'address' => 'required|string',
            'state' => 'required|string',
            'profession' => 'required|string',
            'user_id' => 'required|numeric',
            'date' => 'required|string',
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please Write Name',
            'name.min' => 'Name must be minimum 5 Characters',
            'address.required' => 'Please Write message',
        ];
    }


}
