<?php

Route::name('api.v1.')->prefix('v1')->middleware('api', 'throttle:60,1')->group(function()
{
    //Auth API Routes
    Route::name('auth.')->prefix('auth')->namespace('Common')->group(function ()
    {
        //$this->middleware('auth:api', ['except' => ['login']]);

        //API Login Route (Guest)
        Route::post('guest/login', 'AuthController@login')
            ->name('login')
            ->middleware('guest');

        //Authenticated Users
        Route::name('authenticated')->prefix('authenticated')->middleware('auth:api')->group(function()
        {
            //API Logout Route
            Route::post('logout', 'AuthController@logout')
                ->name('.logout');

            //API Refresh Route
            Route::post('refresh', 'AuthController@refresh')
                ->name('.refresh');

            //API Authenticated User
            Route::post('me', 'AuthController@me')
                ->name('.me');
        });
    });


    //Guest API Routes
    Route::name('guest.')->prefix('guest')->group(function ()
    {
        Route::post('booking', 'Admin\BookingController@store')
            ->name('booking.store');

        Route::get('hotel/{hotel}', 'Admin\HotelController@show')
            ->name('hotel.show');

        Route::get('room', 'Admin\RoomController@index')
            ->name('room.index');

        Route::get('room/{room}', 'Admin\RoomController@show')
            ->name('show.index');
    });


    //Guest API Routes
    Route::name('option.')->prefix('option')->namespace('Common')->group(function ()
    {
        Route::get('countries', 'OptionController@countries')
            ->name('countries');

        Route::get('states', 'OptionController@states')
            ->name('states');
    });


    //Admin DashBoard API routes
    Route::name('admin.')->prefix('admin')->middleware(['auth:api', 'admin'])->namespace('Admin')->group(function ()
    {
        Route::resource('post', 'PostController')
            ->names([
                'index'     => 'posts.index',
                'show'      => 'posts.show',
                'store'     => 'posts.store',
                'update'    => 'posts.update',
                'destroy'   => 'posts.destroy'
            ])->only([
                'show', 'update'
            ]);
    });
});
