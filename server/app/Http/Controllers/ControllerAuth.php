<?php

namespace App\Http\Controllers;

use App\Model\ModelAuth;
use Illuminate\Http\Request;

class ControllerAuth extends Controller
{
    public function Auth(Request $rs)
    {
        return ModelAuth::Auth($rs->input());
    }
}
