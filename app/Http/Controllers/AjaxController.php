<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index() {
        return;
    }

    public function getIp(Request $request) {
        $name = $request->name;
        $msg = "Welcome ".$name;

        $ipaddress = $request->ip();

        $ip = $ipaddress;

        return response()->json(array('msg'=> $msg, 'ip'=> $ip), 200);
    }
}
