<?php

namespace App\Shared\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class BaseApiRequest extends FormRequest
{
    abstract public function rules(): array;

    public function authorize(): true
    {
        return true;
    }
}
