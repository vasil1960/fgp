<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreManuscriptPost extends FormRequest
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
            'coverletter' => 'required',
            'title'       => 'required',
            'abstract'    => 'required',
            'keywords'    => 'required',
            // 'comment'     => 'required',
            'docfiles'    => 'nullable|mimes:doc,txt|max:1999'
        ];
    }
}
