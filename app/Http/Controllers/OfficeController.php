<?php

namespace App\Http\Controllers;

use App\Helpers\ModelHelper;

class OfficeController extends Controller
{
    public function getOffice($count = 1)
    {
        $i = 0;
        $return = [];
        while ($i <= $count) {
            $return[] = ModelHelper::getOffice();
            $i++;
        }

        return response()->json($return);
    }
}
