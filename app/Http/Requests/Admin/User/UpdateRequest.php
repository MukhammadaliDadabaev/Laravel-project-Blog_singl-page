<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,'. $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Ushbu qator, to`ldirilishi shart',
            'name.string' => 'Ism qator bo`lishi kerak',
            'email.required' => 'Ushbu qator, to`ldirilishi shart',
            'email.string' => 'Pochta satr bo`lishi kerak',
            'email.email' => 'Pochtangiz formatga mos kelishi kerak 👉 mail@some.domain',
            'email.unique' => 'Bu e-mailga ega foydalanuvchi allaqachon mavjud',
        ];
    }
}
