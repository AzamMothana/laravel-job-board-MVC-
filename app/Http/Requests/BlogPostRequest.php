<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [  

            'title' => "bail|required|unique:post,title,{$this->input('id')}", // {bail} is for stop runnning validation rule 
            // on an attribute after the frist validation failure . 
            'author'=> 'required',
            'body'  => 'required'
        ];
    }
    public function messages()
    {
        return [
        'title.required'=> 'faild is required',
        'author.required'=> 'faild is required',
        'body.required'=> 'faild is required',
        ];  
    }
}
