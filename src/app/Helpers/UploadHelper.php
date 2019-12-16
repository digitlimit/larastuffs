<?php namespace Digitlimit\Larastuffs\App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class UploadHelper
{

    /**
     * Upload Post Image
     *
     * @param UploadedFile $image
     * @return bool|string
     */
    public static function uploadPostImage(UploadedFile $image)
    {
        if(!$image->isValid()){
            return null;
        }

        //generate filename
        $filename = Str::random()
            . "_post"
            . "." . $image->getClientOriginalExtension();


        //generate file path
        $path = PathHelper::image('post');

        //upload profile pix
        if(!$path = $image->storeAs($path, $filename, 'public')) {
            return null;
        }

        return $path;
    }
}