<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $month = ['Oktober', 'November', 'Desember'];
        
        return view('blog.index',compact('month'));
    }

    public function show($key = null) {
        if ($key == null) {
            return redirect()->route('blog-fronted')->with('error', 'The key #'.$key. 'Not Found!');
        } else {
            $_key = [1, 2, 3];

            if (!in_array($key, $_key)) {
                return redirect()->route('blog-frontend')->with('error', 'The Key has invalid');
            } else {
                return view('blog.show', compact('key', ));
            }
            
            
        }
        
    }
}
