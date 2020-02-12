<?php

namespace App\Http\Requests\Api;

class CustomHtmlUpdateRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'position' => 'required',
            'content' => '',
        ];
    }
}
