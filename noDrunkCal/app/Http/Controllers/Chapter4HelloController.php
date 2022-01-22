<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;


class Chapter4HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.validate', ['msg'=>'フォームを入力してください。' ]);
    }

    public function post(HelloRequest $request)
    {
        return view('hello.validate', ['msg'=>'正しく入力されました！']);
    }
}
