<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;

class FormRequestController extends Controller
{
    public function getSend(){
        return view('form');
    }

    public function postSend(Request $request){
        // echo $request->path();
        // if($request->is('form-*')){
        //     echo 'Bằng';
        // }else{
        //     echo 'Không Bằng';
        // }

        // echo $request->url();
        // echo $request->fullUrl();

        // echo $request->method();
        
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        
        // $name = $request->input('usernasme', 'Akai Shuichi');
        // echo $name;

        // echo $request->input('product.2');

        // echo "<pre>";
        // print_r($request->except(['username', 'password']));
        // echo "</pre>";

        // if($request->has('username')){
        //     echo 'Tồn tại';
        // }else{
        //     echo 'Không tồn tại';
        // }


        // if ($request->filled('password')) {
        //     echo 'Không rỗng';
        // }else{
        //     echo 'Rỗng';
        // }

        // $request->flash();
        // return redirect('form-request');

        // return redirect('form-request')->withInput();
        
        
        // echo $name = $request->cookie('name');
        // echo $email = $request->cookie('email');
        // $username = Cookie::get('username');
        // return view('form')->with(['name' => $name, 'email' => $email]);
        // return response('Hello World')->cookie(
        //     'username', 'Akai Shuichi', 1
        // );

        // echo $request->file('photo');
        // echo "<br>";
        // echo $request->photo;
        // if ($request->hasFile('photo')) {
        //     echo "<br>Tồn tại";
        // }else{
        //     echo "<br>Không tồn tại";
        // }

        // if ($request->file('photo')->isValid()) {
        //     echo "<br>Hợp lệ";
        // }else{
        //     echo "<br>Không hợp lệ";
        // }

        // echo $request->photo->path();
        // echo "<br>";
        // echo $request->photo->extension();

        // echo $request->photo->store('images', 's3');


    }


    
}
