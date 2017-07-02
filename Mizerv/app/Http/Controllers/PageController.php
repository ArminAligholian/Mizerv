<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getindex()
    {
        $areas=Area::all();
        return view("homepage.DefualtHome")->withAreas($areas);
    }

    public function getprofile()
    {
        return view("myprofile.myprofiletest");
    }
    public function gettest()
    {
        return view("myprofile.test");
    }

    public function gethome()
    {
        $areas=Area::all();
        return view('homepage.DefualtHome')->withAreas($areas);
    }
}
