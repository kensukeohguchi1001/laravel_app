<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $msg = 'please input text:';
        $keys = [];
        $values = [];
        if ($request->isMethod('post'))
        {
            $form = $request->only(['name', 'mail', 'tel']);
            $keys = array_keys($form);
            $values = array_values($form);
            $msg = old('name'). ','. old('mail'). ',' . old('tel');
            $data = [
                'msg' => $msg,
                'keys' => $keys,
                'values' => $values
            ];
            $request->flash();
            return view('hello.index', $data);
        }

        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values
        ];
        $request->flash();
        return view('hello.index', $data);
    }
}
