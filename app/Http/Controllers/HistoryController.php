<?php


namespace App\Http\Controllers;


use App\Helpers\ModelHelper;

class HistoryController extends Controller
{
    public function getHistory($count = 1)
    {
        $i = 0;
        $return = [];

        while ($i <= $count) {
            $return[] = ModelHelper::getHistory();
            $i++;
        }

        return response()->json($return);
    }
}