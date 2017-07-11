<?php

namespace App\Http\Controllers;

use App\Area;
use App\Restaurant;
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
        $restaurants=Restaurant::all();
        return view("myprofile.myprofiletest")->withRestaurants($restaurants);
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
