<?php

namespace Digitlimit\Larastuffs\App\Http\Controllers\Common;

use Digitlimit\Larastuffs\App\Rules\Recaptcha;
use Illuminate\Support\Facades\Auth;
use Digitlimit\Larastuffs\App\Http\Controllers\ApiController;
use Digitlimit\Larastuffs\App\Transformers\UserTransformer;

class AuthController extends ApiController
{
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        //this will ensure recaptcha enforcement for only same origin request
        //API not enforced for outside API calls
        if($recaptcha = request(['recaptcha'])){
            $validator = validator($recaptcha, [
                'recaptcha' => ['required', new Recaptcha],
            ]);

            if($validator->fails()){
                return $this->apiErrorResponse('recaptcha_failed');
            }

        }

        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return $this->apiErrorResponse('unauthorized');
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $user = auth()->user();

        return fractal($user, new UserTransformer())
            ->withResourceName('users')
            ->respond(200);
//        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return $this->apiSuccessResponse('logout_success');
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        $user = fractal(auth()->user(), new UserTransformer())
            ->withResourceName('users');

        return response()->json([
            'token' => $token,
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60,
            'user'         => $user
        ], 200, [
            'Authorization'=> $token
        ]);
    }
}