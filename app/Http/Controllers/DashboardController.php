<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->utype == 'ADM') {
                return view("dashboard.admin.index");
            } else {
                return view("dashboard.members.index");
            }
        } else {
            return redirect()->back();
        }
    }
}
