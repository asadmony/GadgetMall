<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewSliderRequest extends FormRequest
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
            'title' => 'required|max:255',
            'details' => 'required',
            'buttonname' => 'max:255',
            'buttonlink' => 'max:255',
            'image' => 'required|image|max:300',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Slider Title is required',
            'title.max' => 'Slider Title can not be more than 225 characters.',
            'details.required' => 'Slider details is required',
            'buttonname.max' => 'Button name can not be more than 225 characters.',
            'buttonlink.max' => 'Button link can not be more than 225 characters.',
            'image.required' => 'Category Logo is required',
            'image.image' => 'Category Logo should be an image file',
            'image.image' => 'Category Logo should be of 300KB maximum',
        ];
    }
}
