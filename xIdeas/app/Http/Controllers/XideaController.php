<?php

namespace App\Http\Controllers;
use App\Models\xidea;

use Illuminate\Http\Request;

class XideaController extends Controller
{
    public function store(){

        request()->validate([
            'xidea' => 'required|min:3|max:240', //validating textbox called xidea   
        ]);

        $xidea = xidea:: create ( 
            [
            'content' => request()->get('xidea',''), //getting data from textbox called "xidea" if nit exist return empty string
        ]
    );
          return redirect()->route('dashboard')->with('success', 'xidea created successfully!');
    
    }
    public function destroy(xidea $xidea){ //the variable xidea is the id of the xidea as is the same as the one in the route
        $xidea->delete();
       

        return redirect()->route('dashboard')->with('success', 'xidea deleted successfully!');
    }
}
