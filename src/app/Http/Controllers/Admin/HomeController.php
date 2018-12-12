<?php

namespace Untrefmedia\UMAdmin\App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Untrefmedia\UMAdmin\App\Http\Controllers\Controller;

class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');

    }

	public function index(){

		//return redirect('admin/category');
		// return view("admin.master");

	}


}
