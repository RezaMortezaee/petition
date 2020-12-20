<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
            'name' => ['required', 'string', 'min:3'],
            'body' => ['unique:users','email'],
            'password' => ['password', 'min:6'],
        ]);

        $input = $request->all();

        $user = User::create($input);

        return response()->json(['data'=> $user], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json(['data'=> $user], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //FIXME: it redirects to /home
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['unique:users','email'],
            'password' => ['password', 'min:6'],
        ]);

        $input = $request->all();

        $user->fill($input)->save();

        return response()->json(['data'=>$user], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['data'=> $user], 200);
    }
}
