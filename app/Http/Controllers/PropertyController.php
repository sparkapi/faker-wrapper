<?php

namespace App\Http\Controllers;


use App\Helpers\ModelHelper;

class PropertyController extends Controller
{
    public function getProperty($count = 1)
    {
        $i = 0;
        $return = [];

        while ($i <= $count) {
            $return[] = ModelHelper::getProperty();
            $i++;
        }

        return response()->json($return);
    }
}