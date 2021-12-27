<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'fullname'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'required'=>'Bạn không được để trống trường này',
            'email'=>'Định dạng email là mặc định'
        ];
    }
}
