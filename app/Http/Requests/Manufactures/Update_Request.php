<?php

namespace App\Http\Requests\Manufactures;

use Illuminate\Foundation\Http\FormRequest;

class Update_Request extends FormRequest
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
            'name'=>'required',
            'model' => 'required',
            'price'=> 'required',
            'country_of_origin'=> 'required'
        ];
    }
}
