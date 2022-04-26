<?php

namespace App\Http\Requests;

use App\Models\Expertise;
use Illuminate\Foundation\Http\FormRequest;

class UpdateExpertiseRequest extends FormRequest
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
        $rules = Expertise::$rules;
        $rules["images"] = 'nullable';
        $rules["images.*"] = 'image|mimes:jpeg,png,jpg|max:1024';
        return $rules;
    }
    public function messages()
    {
        return [
            'expertise.*.required' => 'La liste d\'expertise est obligatoire.',
        ];
    }
}
