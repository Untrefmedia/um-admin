<?php

namespace Untrefmedia\UMAdmin\App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Untrefmedia\UMAdmin\App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {



    }
    public function index(){



        return view("umadmin::admin.dashboard");

    }





}
