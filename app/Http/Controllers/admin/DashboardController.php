<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Searchable;
use Illuminate\View\View;


class DashboardController extends Controller
{
   

    function __construct()
    {
        // $this->middleware(['permission:'])
    }

    function index() : View {
      return view('admin.dashboard.index');
    }
}
