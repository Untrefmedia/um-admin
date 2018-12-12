<?php

namespace Untrefmedia\UMAdmin\App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Untrefmedia\UMAdmin\App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
        echo 'bla';

    }
    public function index(){


        return view("admin.dashboard");

    }





}
