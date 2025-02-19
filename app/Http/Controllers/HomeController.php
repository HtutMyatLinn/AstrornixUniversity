<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function administrator()
    {
        return view('admin.index');
    }
    public function marketingManager()
    {
        return view('marketingmanager.index');
    }
    public function marketingCoordinator()
    {
        return view('marketingcoordinator.index');
    }
}
