<?php

namespace App\Http\Requests;

use App\Models\Expertise;
use Illuminate\Foundation\Http\FormRequest;

class CreateExpertiseRequest extends FormRequest
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
        return Expertise::$rules;
    }

    public function messages()
    {
        return [
            'expertise.*.required' => 'La liste d\'expertise est obligatoire.',
        ];
    }
}
