<?php

namespace Digitlimit\Larastuffs\App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true; //Gate::allows('admin.post.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'ID' => ['required', 'string'],
            'post_author' => ['required', 'string'],
            'post_date' => ['required', 'date'],
            'post_date_gmt' => ['required', 'date'],
            'post_content' => ['required', 'string'],
            'post_title' => ['required', 'string'],
            'post_excerpt' => ['required', 'string'],
            'post_status' => ['required', 'string'],
            'comment_status' => ['required', 'string'],
            'ping_status' => ['required', 'string'],
            'post_password' => ['required', 'string'],
            'post_name' => ['required', 'string'],
            'to_ping' => ['required', 'string'],
            'pinged' => ['required', 'string'],
            'post_modified' => ['required', 'date'],
            'post_modified_gmt' => ['required', 'date'],
            'post_content_filtered' => ['required', 'string'],
            'post_parent' => ['required', 'string'],
            'guid' => ['required', 'string'],
            'menu_order' => ['required', 'integer'],
            'post_type' => ['required', 'string'],
            'post_mime_type' => ['required', 'string'],
            'comment_count' => ['required', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
