<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use App\User;


class UpdatePostRequest extends FormRequest
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
        $id=$this->route('post');
         $post = Post::find($id)[0];
        // dd($post);
        return [
            'title' => ['required','min:3', Rule::unique('posts')->ignore($post->title, 'title')],
            'description' => 'required|min:10',
            'user_id' => 'exists:users,id'
        ];
    }
}
