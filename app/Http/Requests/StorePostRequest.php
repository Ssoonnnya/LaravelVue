<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Post;
use App\Http\Contollers\Api\PostController;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
 
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'content' => ['required'],
            'category_id' => ['required',  'exists:categories,id'],
        ];
    }
    public function attributes(): array
    {
        return ['category_id' => 'category'];
    }
}