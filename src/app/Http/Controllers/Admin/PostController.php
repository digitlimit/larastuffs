<?php

namespace Digitlimit\Larastuffs\App\Http\Controllers\Admin;

use Digitlimit\Larastuffs\App\Http\Controllers\ApiController;
use Digitlimit\Larastuffs\App\Models\Post;
use Digitlimit\Larastuffs\App\Transformers\PostTransformer;
use Digitlimit\Larastuffs\App\Helpers\UploadHelper;

use Digitlimit\Larastuffs\App\Http\Requests\Admin\Post\BulkDestroyPost;
use Digitlimit\Larastuffs\App\Http\Requests\Admin\Post\DestroyPost;
use Digitlimit\Larastuffs\App\Http\Requests\Admin\Post\IndexPost;
use Digitlimit\Larastuffs\App\Http\Requests\Admin\Post\StorePost;
use Digitlimit\Larastuffs\App\Http\Requests\Admin\Post\UpdatePost;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\DB;


class PostController extends ApiController
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPost $request
     * @return array|Factory|View
     */
    public function index(IndexPost $request)
    {
        $posts = Post::paginate();

        return fractal($posts, new PostTransformer())
            ->withResourceName('posts')
            ->respond(200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePost $request
     * @return array
     */
    public function store(StorePost $request)
    {
        if($post = Post::create($request->all())){

            $post = fractal($post, new PostTransformer())
                ->withResourceName('posts')->toArray();

            return $this->apiStoreResponse($post);
        }

        return $this->apiErrorResponse('unprocessable_entity');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $id
     * @throws AuthorizationException
     * @return void
     */
    public function show($id)
    {
        //throw an exception 404 if not found
        $post = Post::findOrFail($id);

        return fractal($post, new PostTransformer())
            ->withResourceName('posts')
            ->respond(200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePost $request
     * @param Post $id
     * @return array
     */
    public function update(UpdatePost $request, $id)
    {
        //throw an exception 404 if not found
        $post = Post::findOrFail($id);

        //data
        $data = $request->all();

        //upload image
        if($request->image){
            $data['image'] = UploadHelper::uploadPostImage($request->image);
        }

        if($post->update($data)){

            $post = fractal($post, new PostTransformer())
                ->withResourceName('posts')->toArray();

            return $this->apiUpdateResponse($post);
        }

        return $this->apiErrorResponse('unprocessable_entity');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPost $request
     * @param Post $id
     * @throws Exception
     * @return ResponseFactory
     */
    public function destroy(DestroyPost $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return $this->apiDeleteResponse();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPost $request
     * @throws Exception
     * @return Response
     */
    public function bulkDestroy(BulkDestroyPost $request)
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Post::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return $this->apiDeleteResponse();
    }
}
