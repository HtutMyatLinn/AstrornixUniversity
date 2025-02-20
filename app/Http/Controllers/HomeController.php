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

    public function administratorUserManagement()
    {
        return view('admin.usermanagement');
    }

    public function administratorNotifications()
    {
        return view('admin.notifications');
    }

    public function administratorReport()
    {
        return view('admin.reportandanalysis');
    }

    public function administratorSubmission()
    {
        return view('admin.submission');
    }

    public function administratorClosure()
    {
        return view('admin.closuredate');
    }

    public function administratorLogs()
    {
        return view('admin.logsandsecurity');
    }

    public function administratorInquiry()
    {
        return view('admin.inquirymanagement');
    }

    public function administratorEditUserData()
    {
        return view('admin.edituserdata');
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
