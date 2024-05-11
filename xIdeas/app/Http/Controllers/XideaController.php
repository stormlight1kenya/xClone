<?php

namespace App\Http\Controllers;
use App\Models\xidea;

use Illuminate\Http\Request;

class XideaController extends Controller
{
    public function store(){

        $xidea = xidea:: create (
            [
            'content' => request()->get('xidea',''), //getting data from textbox called "xidea" if nit exist return empty string
        ]
    );
          return redirect()->route('dashboard');
    
    }
}
