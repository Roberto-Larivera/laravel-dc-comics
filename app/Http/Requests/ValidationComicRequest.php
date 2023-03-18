<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationComicRequest extends FormRequest
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
            'title_comic' => 'required|min:2|max:255',
            'description_comic' => 'nullable',
            'url_comic' => 'max:255|url',
            'price_comic' => 'required|decimal:0,2|numeric|between:0,9999.99',
            'series_comic' => 'required|min:2|max:60',
            'sale_date_comic' => 'required|date',
            'type_comic' => 'required|min:2|max:30',
        ];
    }
}
