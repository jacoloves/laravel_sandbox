<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'yamadaTro', 'mail'=>'test@test1'],
            ['name'=>'yamadaTro', 'mail'=>'test@test2'],
            ['name'=>'yamadaTro', 'mail'=>'test@test3']
        ];
        return view('hello.index', ['data'=>$data]);
    }

//    public function post(Request $request)
//    {
//        return view('hello.index', ['msg'=>$request->msg]);
//    }
}
