<?php

namespace Digitlimit\Larastuffs\App\Observers;

use Digitlimit\Larastuffs\App\Models\Post;
use Digitlimit\Larastuffs\App\Helpers\PostHelper;

class PostObserver
{
    /**
     * Run before create
     *
     * @param Post $post
     */
    public function creating(Post $post)
    {
    
    }


    /**
     * Run before updating
     *
     * @param Post $post
     */
    public function updating(Post $post)
    {

    }

}
