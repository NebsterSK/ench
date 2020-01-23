<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class CraftStoreRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'user_id' => 'required|integer|exists:users,id',
            'enchant_id' => 'required|integer|exists:enchants,id',
            'mats' => 'nullable|string',
            'price' => 'nullable|numeric|min:0.01',
            'buyer' => 'nullable|string|min:2|max:20',
            'class' => 'nullable|string|min:4|max:8'
        ];
    }

    public function prepareForValidation() {
        $this->merge(['user_id' => Auth::user()->id]);
    }
}
