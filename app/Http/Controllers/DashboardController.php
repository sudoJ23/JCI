<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        if (auth()->user()->role->name == "company") {
            return view('dashboard.company.index');
        } else if (auth()->user()->role->name == "farmer") {
            return view('dashboard.farmer.index');
        } else {
            return redirect('/');
        }
    }
}
