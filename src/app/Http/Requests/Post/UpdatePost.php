<?php

namespace Digitlimit\Larastuffs\App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true; //Gate::allows('admin.post.edit', $this->post);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'ID' => ['sometimes', 'string'],
            'post_author' => ['sometimes', 'string'],
            'post_date' => ['sometimes', 'date'],
            'post_date_gmt' => ['sometimes', 'date'],
            'post_content' => ['sometimes', 'string'],
            'post_title' => ['sometimes', 'string'],
            'post_excerpt' => ['sometimes', 'string'],
            'post_status' => ['sometimes', 'string'],
            'comment_status' => ['sometimes', 'string'],
            'ping_status' => ['sometimes', 'string'],
            'post_password' => ['sometimes', 'string'],
            'post_name' => ['sometimes', 'string'],
            'to_ping' => ['sometimes', 'string'],
            'pinged' => ['sometimes', 'string'],
            'post_modified' => ['sometimes', 'date'],
            'post_modified_gmt' => ['sometimes', 'date'],
            'post_content_filtered' => ['sometimes', 'string'],
            'post_parent' => ['sometimes', 'string'],
            'guid' => ['sometimes', 'string'],
            'menu_order' => ['sometimes', 'integer'],
            'post_type' => ['sometimes', 'string'],
            'post_mime_type' => ['sometimes', 'string'],
            'comment_count' => ['sometimes', 'string'],
            
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
