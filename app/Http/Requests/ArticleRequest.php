<?php

namespace  App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'title' => 'min:5|max:100',
        ];
    }
}