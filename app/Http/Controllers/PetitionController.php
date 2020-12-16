<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Petition::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'body' => ['required', 'string']
        ]);

        $inputs = $request->all();

        $petitions = Petition::create($inputs);

        return response()->json(['data' => $petitions], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petition = Petition::findOrFail($id);

        return $petition;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'body' => ['required', 'string']
            ]);

        $petitions = Petition::findOrFail($id);

        $inputs = $request->all();

        $petitions->fill($inputs)->save();

        return response()->json(['data' => $petitions], 201);
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Petition  $petition
         * @return \Illuminate\Http\Response
         */
    public function destroy($id)
    {
        $petitions = Petition::findOrFail($id);

        return response()->json(['data' => $petitions], 201);
    }
}
