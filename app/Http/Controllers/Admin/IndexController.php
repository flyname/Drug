<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
class IndexController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('Admin/Index/list');
    }

}