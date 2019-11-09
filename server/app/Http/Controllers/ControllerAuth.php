<?php

namespace App\Http\Controllers;

use App\Model\ModelAuth;
use Illuminate\Http\Request;

/**
 *  @author heitor <heitor@heitor>
 *
 */
class ControllerAuth extends Controller
{
    /**
     * Undocumented function
     *
     * @param Request $rs
     * @return void
     */
    public function Auth(Request $rs)
    {
        return ModelAuth::Auth($rs->input());
    }
}
