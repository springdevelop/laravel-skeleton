<?php

namespace App\Http\Requests\Api;

class PayStoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:6',
            'amount' => 'required|numeric',
        ];
    }
}
