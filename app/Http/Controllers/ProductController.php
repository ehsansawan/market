<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function write()
    {
       
           Storage::disk('local')->put('ex.txt','ehsan312sf');
            echo asset('images/ex.txt');

    }
}
