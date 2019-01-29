<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getSession(){
        return view('session-form');
    }

    public function postSession(Request $request){
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
        // $request->session()->set('key','Giá trị');
        // $request->session()->put('key','value');
        // session(['yyy' => 'Giá trị']);
        // echo $request->session()->get('yyy');
        // echo session('key');
        // echo "<pre>";
        // print_r($request->session());
        // echo "</pre>";
        // $data = $request->session()->all();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        
    }
}
