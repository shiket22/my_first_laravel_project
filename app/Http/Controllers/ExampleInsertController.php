<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExampleInsert;

class ExampleInsertController extends Controller
{

    function addData(Request $req){

        $user = new ExampleInsert;
        $user->name=$req->name;
        $user->password=$req->password;;
        $user->email=$req->email;
        $user->save();
        return redirect('view');
    }

}

