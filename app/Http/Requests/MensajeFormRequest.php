<?php

namespace sistema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MensajeFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mail',
        ];
    }
}
