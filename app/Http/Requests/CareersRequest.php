<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareersRequest extends FormRequest
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
            'title'        => 'required',
            'description'  => 'required',
            'we_offer'     => 'required',
            'requirements' => 'required',
            'salary_range' => 'required',
            'store_id'     => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'        => 'Ups! El campo title es requerido',
            'description.required'  => 'Ups! El campo description es requerido',
            'we_offer.required'     => 'Ups! El campo we_offer es requerido',
            'requirements.required' => 'Ups! El campo requirements es requerido',
            'salary_range.required' => 'Ups! El campo salary_range es requerido',
            'store_id.required'     => 'Ups! El campo store_id es requerido',
        ];
    }

    // public function attributes(): array
    // {
    //     return ['category' => 'categoria'];
    // }
}
