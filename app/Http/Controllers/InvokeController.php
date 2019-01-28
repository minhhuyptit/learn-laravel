<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokeController extends Controller
{
    public function __invoke(){
        return 'Class chỉ có 1 hàm duy nhất';
    }

    public function hello(){
        return 'Hello';
    }
}
