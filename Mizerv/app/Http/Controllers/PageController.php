<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getindex()
    {
        return view("homepage.DefualtHome");
    }

    public function getprofile()
    {
        return view("myprofile.myprofiletest");
    }
}
