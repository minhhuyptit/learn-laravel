<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function getFirst(){
        return 'First';
    }

    public function getSecond(){
        return 'Second';
    }

    public function postThird(){
        return 'Third';
    }

}
