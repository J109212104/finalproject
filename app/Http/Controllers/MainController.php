<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
use Illuminate\Http\Request;
use App\Models\Headlines;

class MainController extends Controller
{
    function index(){
        $titles = Headlines::all();
        return view("index",compact('titles'));
    }

    function insert(Request $req){
    $title = $req->input('title');
    $data = new Headlines;
    $data->title =$title;
    $data->save();
    return redirect("/");
    }

    function logout() {
        Auth::logout();
        session()->forget('username');
        return redirect("/");
    }

    public function remove($id){
        Headlines::where("id",$id)->delete();
        return redirect("/");
    }
 

}
