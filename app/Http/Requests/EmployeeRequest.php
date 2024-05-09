<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'EmployeeID' => 'required',
			'LastName' => 'required|string',
			'FirstName' => 'required|string',
			'Title' => 'string',
			'TitleOfCourtesy' => 'string',
			'Address' => 'string',
			'City' => 'string',
			'Region' => 'string',
			'PostalCode' => 'string',
			'Country' => 'string',
			'HomePhone' => 'string',
			'Extension' => 'string',
			'PhotoPath' => 'string',
        ];
    }
}
