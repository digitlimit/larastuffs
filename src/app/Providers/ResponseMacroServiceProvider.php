<?php

namespace Digitlimit\Larastuffs\App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Contracts\Validation\Validator;
use Digitlimit\Larastuffs\App\Helpers\ResponseHelperTrait;
use Exception;

class ResponseMacroServiceProvider extends ServiceProvider
{
    use ResponseHelperTrait;
    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {

        Response::macro('show', function (array $content, array $headers=[])
        {
            return $this->apiShowResponse($content, $headers);
        });


        Response::macro('list', function (array $content, array $headers=[])
        {
            return $this->apiListResponse($content, $headers);
        });


        Response::macro('store', function (array $content, array $headers=[])
        {
            return $this->apiStoreResponse($content, $headers);
        });

        //PATCH - Update an item - HTTP Response Code: 200/204
        Response::macro('update', function (array $content, array $headers=[])
        {
            return $this->apiUpdateResponse($content, $headers);
        });

        //DELETE - Delete an item - HTTP Response Code: 204
        Response::macro('delete', function (array $headers=[])
        {
            return $this->apiDeleteResponse($headers);
        });


        //Generate an error response
        Response::macro('error', function ($code, array $headers=[])
        {
            return $this->apiErrorResponse($code, $headers);
        });


        Response::macro('fail', function (Exception $exception, array $headers=[])
        {
            return $this->apiFailureResponse($exception,$headers);
        });


        //Generation Validation response
        Response::macro('validation', function (Validator $validator, array $headers=[])
        {
            return $this->apiValidationResponse($validator, $headers);
        });
    }
}