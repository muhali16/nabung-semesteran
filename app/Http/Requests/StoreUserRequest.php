<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->level->id == 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required|min:1|max:255",
            "username" => "required|regex:/^[A-Za-z][A-Za-z0-9]{5,31}$/|min:6|max:255|unique:users",
            "level_id" => "required|min:1",
        ];
    }
}
