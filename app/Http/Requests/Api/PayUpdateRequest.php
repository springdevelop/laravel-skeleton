<?php

namespace App\Http\Requests\Api;

class PayUpdateRequest extends BaseRequest
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
            'desc' => 'required',
            'amount' => 'required|numeric',
        ];
    }
}
