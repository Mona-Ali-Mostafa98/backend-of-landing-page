<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
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
            'title' => ['required','string', 'min:5','max:255'],
            'description' => ['required','string'],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'عنوان الميزه مطلوب ادخاله',
            'title.min' => 'العنوان لابد ان يكون على الاقل 5 حروف',
            'title.max' => 'العنوان لابد الا يزيد عن 225 حروف',
            'description.required' => 'وصف الميزه مطلوب ادخاله ',
        ];
    }
}