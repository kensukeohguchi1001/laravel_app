<?php

namespace App\Http\Controllers;

use App\MyClasses\MyServiceInterface;
use App\Facades\MyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->query('page');
        $msg = 'show page:' . $id;
        $result = DB::table('people')->simplePaginate(3);
        $data = [
            'msg' => $msg,
            'data' => $result,
        ];

        return view('hello.index', $data);
    }
}
