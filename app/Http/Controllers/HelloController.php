<?php

namespace App\Http\Controllers;

use App\MyClasses\MyServiceInterface;
use App\Facades\MyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use App\Jobs\MyJob;

class HelloController extends Controller
{
    public function index(Person $person = null)
    {
        if ($person != null) {
            MyJob::dispatch($person)->delay(now()->addMinutes(1));
        }
        $msg = 'show people record';
        $result = Person::get();

        $data = [
            'msg' => $msg,
            'data' => $result,
            'input' => ''
        ];
        return view('hello.index', $data);
    }

    public function send(Request $request)
    {
        $input = $request->input('find');
        $msg = 'search:' . $input;
        $result = Person::search($input)->get();

        $data = [
            'input' => $input,
            'msg' => $msg,
            'data' => $result
        ];
        return view('hello.index', $data);
    }

    public function save($id, $name)
    {
        $record = Person::find($id);
        $record->name  = $name;
        $record->timestamps = false;
        $record->save();
        return redirect('hello');
    }

    public function other()
    {
        $person = new Person();
        $person->all_data = ['aaa','bbb',1234];
        $person->timestamps = false;
        $person->save();

        return redirect('hello');
    }

    public function json($id = -1)
    {
        if ($id == -1) {
            return Person::get()->toJson();
        } else {
            return Person::first()->toJson();
        }
    }

}
