<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function zbc(){
        $data=DB::table('p_goods')->first();
        var_dump($data);
    }
}
