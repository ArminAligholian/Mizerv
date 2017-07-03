<?php

namespace App\Http\Controllers;

use App\Area;
use App\Restaurant;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;

class RestaurantsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index')->withRestaurants($restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas=Area::all();
        return view('restaurants.create')->withAreas($areas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'name'         => 'required|max:255',
            'phone'        => 'required|integer',
            'address'      => 'required|max:255',
            'location'     => 'required|max:255',
            'profile-image'=> 'sometimes|image',
            'description'  => 'required|max:1000'
        ));
        // store in the database
        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->phone = $request->phone;
        $restaurant->address = $request->address;
        $restaurant->location = $request->location;
        $restaurant->capacity = $request->capacity;
        $restaurant->description= Purifier::clean($request->description);


        //saving image
        if ($request->hasFile('profile_image')){
            $image    = $request->file('profile_image');
            $filename = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(400,400)->save($location);

            $restaurant->profile_image = $filename;
        }

        $restaurant->save();
        $restaurant->areas()->sync($request->areas, false);

        Session::flash('success', 'The restaurant  was successfully save!');
        return redirect()->route('restaurants.show', $restaurant->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant=Restaurant::find($id);
        return view('restaurants.show')->withRestaurant($restaurant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
