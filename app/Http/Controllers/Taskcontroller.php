<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Taskcontroller extends Controller
{
    public function index(){
        $tasks = DB:: table('tasks')->get();
    return view ('tasks',compact('tasks'));
}

    
    public function show ($id){
        $task= DB::table('tasks')->find($id);
        return view('show' , compact('task'));

    }

    public function store (){
        $task= DB::table('tasks')->insert(
            ['name'=> $_POST['name'] ]
        );
        return redirect()->back();

    }
}
