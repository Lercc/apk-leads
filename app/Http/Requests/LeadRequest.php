<?php

namespace App\Http\Requests;

use App\Models\Lead;
use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest
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
            'dni'                       => ['required','digits:8', 'numeric', 'unique:leads,dni'],
            'name'                      => ['required', 'string', 'max:40'],
            'surnames'                  => ['required', 'string', 'max:60'],
            'mobile'                    => ['required', 'digits:9', 'numeric'],
            'email'                     => ['required', 'string', 'email', 'max:255', 'unique:leads,email'],
            'career_id'                 => ['required'],
            'semester'                  => ['required', 'string', 'max:9'],
            'institution_id'            => ['required'],
            'english_level'             => ['required', 'string', 'max:20'],
            'program_id'                => ['required'],
            'communication_channel'     => ['required', 'string', 'max:20'],
            'schedule_start'            => ['required', 'min:1', 'max:11', 'numeric'],
            'schedule_start_meridiem'   => ['required', 'string', 'max:2'],
            'schedule_end'              => ['required', 'min:1', 'max:11', 'numeric'],
            'schedule_end_meridiem'     => ['required', 'string', 'max:2'],

            'commentary'                => ['nullable'],
            'profile'                  => ['nullable'],
        ];
    }
}
