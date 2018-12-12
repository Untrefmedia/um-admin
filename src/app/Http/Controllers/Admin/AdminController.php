<?php

namespace Untrefmedia\UMAdmin\App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //

    public function __construct()
    {
      //  parent::__construct();
        $this->middleware('auth');

    }


//	public function login(){
//
//		return view("admin.admin_login");
//
//	}


}
