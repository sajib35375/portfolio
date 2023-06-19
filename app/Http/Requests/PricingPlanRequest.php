<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PricingPlanRequest extends FormRequest
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
            'category' => 'required',
            'price' => 'required',
            'lineOne' => 'required',
            'lineTwo' => 'required',
            'lineThree' => 'required',
            'lineFour' => 'required',
            'lineFive' => 'required',
            'type' => 'required'
        ];
    }
}
