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
                return view("pages.index");
            } else {
                return view("pages.index");
            }
        } else {
            return redirect()->back();
        }
    }
    
    //If user is logged in and is logged in and wants to reroute to the homepage
    public function reroute(){
        
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

    //This is to reroute one to the dashboard of either the admin or the users.
    public function dashboard(){
        if (Auth::id()) {
            if (Auth::user()->utype == 'ADM') {
                return view("dashboard.admin.index");
            } else {
                return view("dashboard.admin.index");
            }
        } else {

            return redirect()->back()->with('status, Please login to create a blog.');
        }
    }
}
