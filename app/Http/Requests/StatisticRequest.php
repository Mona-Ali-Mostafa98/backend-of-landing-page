<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatisticRequest extends FormRequest
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
        $id = $this -> route ('statistic');
        return [
            'title' => ['required','string', 'min:5' ,'max:255' , 'unique:statistics,title,'.$id],
            'counter'=> ['required' , 'numeric'],
            'status'=>'required'
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'عنوان الاحصائيه مطلوب ادخاله',
            'title.min' => 'العنوان لابد ان يكون على الاقل 5 حروف',
            'title.max' => 'العنوان لابد الا يزيد عن 225 حروف',
            'title.unique' => 'العنوان لابد ان لا يتكرر ',
            'counter.required' =>  'عداد الاحصائيه مطلوب ادخاله',
        ];
    }
}