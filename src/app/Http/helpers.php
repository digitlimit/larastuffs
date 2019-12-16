<?php


if(!function_exists('larastuffs_asset'))
{

    function larastuffs_asset($path)
    {
        return asset("vendors/digitlimit/assets/{$path}");
    }
}



