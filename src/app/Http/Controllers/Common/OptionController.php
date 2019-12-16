<?php

namespace Digitlimit\Larastuffs\App\Http\Controllers\Common;

use Digitlimit\Larastuffs\App\Http\Controllers\ApiController;
//use App\Transformers\CountryTransformer;
//use App\Transformers\StateTransformer;
//use App\Models\Country;
//use App\Models\State;

class OptionController extends ApiController
{

    public function countries()
    {
//        $countries = Country::all();
//
//        return fractal($countries, new CountryTransformer())
//            ->withResourceName('countries')
//            ->respond(200);
    }

    public function states()
    {
//        $states = State::all();
//
//        return fractal($states, new StateTransformer())
//            ->withResourceName('states')
//            ->respond(200);
    }

}