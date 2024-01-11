



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of blogs.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $icons = [
            ['image' => 'images/popularT.png', 'alt' => 'Description 1'],
            ['image' => 'images/uab.png', 'alt' => 'Description 2'],
            // ... more icons
        ];
    
        return view('about', ['icons' => $icons]);
    }
}
