<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "filename" => "required|max:10000|image" , 
            "title_slider_arabic" => "max:20" , 
            "title_slider_english" => "max:20" , 
            "desc_slider_arabic" => "max:50" ,
            "desc_slider_english" => "max:50" ,
        ];
    }

    public function messages()
    {
       return [
            "title_slider_arabic.max" => __("message.max_message") , 
            "title_slider_english.max" => __("message.max_message") , 
            "desc_slider_arabic" => __("message.max_desc_message") , 
            "desc_slider_english" => __("message.max_desc_message") , 
            "filename.required" => __("message.required_upload_message") , 
            "filename.max" => __("message.max_upload_message")
       ] ; 
    }
}
