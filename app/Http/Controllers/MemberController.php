<?php


namespace App\Http\Controllers;


use App\Helpers\ModelHelper;

class MemberController extends Controller
{
    public function getMember($count = 1)
    {
        $i = 0;
        $return = [];

        while ($i <= $count) {
            $return[] = ModelHelper::getMember();
            $i++;
        }

        return response()->json($return);
    }
}