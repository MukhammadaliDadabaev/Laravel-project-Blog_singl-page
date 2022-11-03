<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Ushbu qator to`ldirilishi shart',
            'title.string' => 'Ma`lumotlar satr turiga mos kelishi kerak',
            'preview_image.required' => 'Ushbu qator to`ldirilishi shart',
            'preview_image.file' => 'Siz faylni tanlashingiz kerak',
            'main_image.required' => 'Ushbu qator to`ldirilishi shart',
            'main_image.file' => 'Siz faylni tanlashingiz kerak',
            'category_id.required' => 'Ushbu qator to`ldirilishi shart',
            'category_id.integer' => 'Kategoriya identifikatori raqam bo‘lishi kerak',
            'category_id.exists' => 'Kategoriya identifikatori ma`lumotlar bazasida bo`lishi kerak',
            'tag_ids.array' => 'Ma`lumotlar massivini yuborish kerak',
        ];
    }
}
