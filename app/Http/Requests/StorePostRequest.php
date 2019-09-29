<?php

namespace App\Http\Requests;

use App\Post;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {   
        return true;
    }

    public function rules()
    {
        return [
            'post_description' => [
                'required',
            ],
        ];
    }
}
