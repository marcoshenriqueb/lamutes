<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoverRequest extends FormRequest
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
        return [
            'title' => 'required|string',
            'subtitle1' => 'string',
            'subtitle2' => 'string',
            'cover_image' => 'required|image',
            'cover_image_responsive' => 'required|image',
        ];
    }
}
