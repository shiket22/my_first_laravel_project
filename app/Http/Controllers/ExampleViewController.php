<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ExampleViewController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from info');
        return view('ExampleView',['users'=>$users]);
        }
}
