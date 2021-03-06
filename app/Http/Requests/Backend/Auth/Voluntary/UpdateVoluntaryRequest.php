<?php

namespace App\Http\Requests\Backend\Auth\Voluntary;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateVoluntaryRequest.
 */
class UpdateVoluntaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isExecutive();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required|max:191',
            'description'  => 'required|max:191',
            'status' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'category' => 'required',
            'stock' => 'required',
        ];
    }
}
