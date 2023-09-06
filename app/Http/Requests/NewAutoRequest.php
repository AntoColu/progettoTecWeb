<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class NewAutoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'marca' => ['required', 'string', 'max:255'],
            'modello' => ['required', 'string', 'max:255'],
            'targa' => ['required', 'string', 'unique:auto', 'max:7'],
            'anno' => ['required', 'integer'],
            'nPosti' => ['required', 'integer'],
            'motore' => ['required', 'string', 'max:255'],
            'carburante' => ['required', 'string', 'max:255'],
            'username' => ['nullable', 'string', 'max:255'],
            'catId' => ['required', 'integer'],
            'descrizione' => ['required', 'string', 'max:255'],
            'prezzo' => ['nullable', 'integer', 'min:1'],
            'data_inizio' => ['nullable', 'date_format:Y-m-d'],
            'data_fine' => ['nullable', 'date_format:Y-m-d']
        ];
    }

    /**
     * Override: response in formato JSON
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
