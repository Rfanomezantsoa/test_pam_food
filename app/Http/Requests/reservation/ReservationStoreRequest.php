<?php

namespace App\Http\Requests\reservation;

use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
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
            'first_name'=>['required', 'alpha_num', 'max:255'],
            'last_name'=>['required', 'alpha_num', 'max:255'],
            'email'=>['nullable', 'Email'],
            'phone'=>['required'],
            'date_reservation'=>['required','after_or_equal:'.date('Y m d')],
            'hour_reservation'=>['required','date_format:H:i'],
            "number"=>['required','integer','max:900','min:1']

        ];
    }
}
