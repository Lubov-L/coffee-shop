<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'total_price' => 'required|integer',
            'user_id' => 'required|exists:users,id',
            'state_id' => 'required|exists:states,id',
        ];
    }
}
