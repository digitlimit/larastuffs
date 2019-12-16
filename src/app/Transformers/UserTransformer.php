<?php

namespace Digitlimit\Larastuffs\App\Transformers;


use League\Fractal\TransformerAbstract;
use Digitlimit\Larastuffs\App\Models\User;
use Digitlimit\Larastuffs\App\Models\Post;

/**
 * Class UserTransformer
 * @package namespace App\Transformers;
 */
class UserTransformer extends TransformerAbstract
{

    protected $availableIncludes = [
        'posts',
        'role'
    ];

    protected $defaultIncludes = [

    ];


    /**
     * Transform the \User entity
     *
     * @param User $model
     * @return array
     */
    public function transform(User $model)
    {
        return [
//            'id'                => (int) $model->id,
            'email'             => $model->email,
            'role'              => $model->role->name,
            'role_display_name' => $model->role->display_name
        ];
    }

    /**
     * Include posts relationship
     *
     * @param User $model
     * @return \League\Fractal\Resource\Item|\League\Fractal\Resource\NullResource
     */
    public function includePosts(User $model){
        $posts = $model->posts;
        return !$posts ? $this->null() : $this->collection($posts, new PostTransformer);
    }


    /**
     * Include role relationship
     *
     * @param User $model
     * @return \League\Fractal\Resource\Item|\League\Fractal\Resource\NullResource
     */
    public function includeRole(User $model){
        $role = $model->role;
        return !$role ? $this->null() : $this->item($role, new RoleTransformer);
    }
}