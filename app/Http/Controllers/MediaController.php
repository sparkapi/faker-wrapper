<?php


namespace App\Http\Controllers;


use App\Helpers\ModelHelper;

class MediaController
{
    public function getPropertyMedia($type = 'exterior', $count = 1)
    {
        $return = ModelHelper::getPropertyMedia();

        return response()->json($return);
    }
}