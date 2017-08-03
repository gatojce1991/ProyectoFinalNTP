<?php

namespace sistema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CanchaFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre',
        ];
    }
}
