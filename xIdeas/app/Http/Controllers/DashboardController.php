<?php

namespace App\Http\Controllers;

use App\Models\xidea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){


   


        return view('dashboard', [
            'xidea' => xidea::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }
}
