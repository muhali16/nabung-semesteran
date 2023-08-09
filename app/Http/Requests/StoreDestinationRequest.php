<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDestinationRequest extends FormRequest
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
            "name" => "required|min:5|max:255",
            "tanggal_kunjungan" => "required|date|date_format:Y-m-d",
            "start" => "required",
            "end" => "required|after:start",
            "maps" => "required|url"
        ];
    }
}
