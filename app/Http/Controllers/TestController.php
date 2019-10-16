<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function test(){
        // Test::create([
        //     'testsname' => 'Name 1',
        //     'testsvalue' => 'Value 1'
        //     ]
        // );

        $abcs = Test::all();
        return view('hello',compact('abcs'));
    }
}
