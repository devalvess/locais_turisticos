<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $place = Place::all();

        return view('place.locais', compact('place'));
    }

    public function create()
    {
     return view('place.create');   
    }

    public function store(Request $request)
    {
        Place::create(
            [
                'name'=>$request->name,
                'description'=>$request->description,
                'address'=>$request->address
            ]

        );

        return redirect('/places');
    }

    public function show($id)
    {
        $place = Place::find($id);

        return view('place.show', compact('place'));
    }

    public function edit($id)
    {

    $place = Place::find($id);

    return view('place.edit', compact('place'));
    }

    public function update($id, Request $request)
    {
        $place = Place::find($id);

        $place->update(
            [
                'name'=> $request->name,
                'description'=> $request->description,
                'address'=> $request->address
            ]
            );

            return redirect('/places/show/' . $id);
    }

    public function delete($id) 
    {
        $place = Place::find($id);

        $place->delete();

        return redirect('/places');
    }

}