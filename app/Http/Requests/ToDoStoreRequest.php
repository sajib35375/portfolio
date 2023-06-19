<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToDoStoreRequest extends FormRequest
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
            'title_one' => 'required',
            'title_two' => 'required',
            'long_text_one' => 'required',
            'long_text_two' => 'required',
            'icon_class' => 'required',
            'photo' => 'required',
            'image_one' => 'required',
            'image_two' => 'required',
        ];
    }
}
