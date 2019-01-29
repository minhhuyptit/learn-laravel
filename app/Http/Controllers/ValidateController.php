<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;

class ValidateController extends Controller {
    public function getValidate() {
        return view('validate');
    }

    public function postValidate(ValidateRequest $request) {
        echo 'Ok';
    }

}
