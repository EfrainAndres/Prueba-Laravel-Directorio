<?php

namespace Prueba\Http\Requests;

use Prueba\Http\Requests\Request;

class TaskRequest extends Request
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
          'name' =>'required',
          'type_id' =>'required',
          'phone' =>'required',
          'email' =>'required|email|unique:tasks',
        ];
    }
}
