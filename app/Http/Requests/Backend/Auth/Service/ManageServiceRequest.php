<?php

namespace App\Http\Requests\Backend\Auth\Service;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageServiceRequest.
 */
class ManageServiceRequest extends FormRequest
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
            //
        ];
    }
}
