<?php


namespace App\Http\Controllers;


use App\Helpers\ModelHelper;
use DI\Container;
use FeedFaker\Classes\OpenHouseFaker;
use FeedFaker\Classes\PropertyFaker;

class OpenHouseController
{
    public function getOpenHouse($count = 1)
    {
        $i = 0;
        $return = [];

        while ($i <= $count) {
            $return[] = ModelHelper::getOpenHouse();
            $i++;
        }

        return response()->json($return);
    }
}