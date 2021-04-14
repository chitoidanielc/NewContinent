<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ContinentController extends Controller
{

    public function index()
    {
        $all_continents = Continent::all();

        return View::make('continent.index')
                    ->with('continent', $all_continents);
    }


    public function create()
    {
        return view('continent.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'tara'          => 'required',
            'capitala'      => 'required',
            'locuitori'     => 'required|numeric',
            'presedinte'    => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('continent/create')
                            ->withErrors($validator)
                            ->withInput($request->all());
        } else {
            $continent = new Continent;
            $continent->tara         = $request->input('tara');
            $continent->capitala     = $request->input('capitala');
            $continent->locuitori    = $request->input('locuitori');
            $continent->presedinte   = $request->input('presedinte');
            $continent->save();

            Session::flash('message', 'Successfully created continent!');
            return Redirect::to('continent');
        }
    }


    public function show($id)
    {
        $id_continent = Continent::find($id);

        return View::make('continent.show')
                    ->with('continent', $id_continent);
    }


    public function edit($id)
    {
        $id_continent = Continent::find($id);

        return View::make('continent.edit')
                    ->with('continent', $id_continent);
    }


    public function update(Request $request, $id)
    {
        $rules = array(
            'tara'          => 'required',
            'capitala'      => 'required',
            'locuitori'     => 'required|numeric',
            'presedinte'    => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('continent/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request->all());
        } else {
            $continent = Continent::find($id);
            $continent->tara         = $request->input('tara');
            $continent->capitala     = $request->input('capitala');
            $continent->locuitori    = $request->input('locuitori');
            $continent->presedinte   = $request->input('presedinte');
            $continent->save();

            Session::flash('message', 'Successfully updated continent!');
            return Redirect::to('continent');
        }
    }


    public function destroy($id)
    {
        $continent = Continent::find($id);
        $continent->delete();

        return Redirect::to('continent');
    }
}
