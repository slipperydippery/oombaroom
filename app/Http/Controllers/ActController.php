<?php

namespace App\Http\Controllers;

use App\Act;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ActController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acts.create');
    }

    /**
     * Add a scene to the Act
     *
     * @param Act $act
     * @return view
     */
    public function addscene(Act $act, $scene)
    {
        $act->scenes()->attach($scene);
        return redirect()->route('acts.media', compact('act'));
    }

    public function removescene(Act $act, $scene)
    {
        $act->scenes()->detach($scene);
        return redirect()->route('acts.media', compact('act'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $act = new Act($request->all());
        $act->user_id = Auth::user()->id;
        $act->lock_id = '1';
        $act->save();
        return redirect('userprofile');
    }

    public function media(Act $act)
    {
      //return($act);
        $user = Auth::user();
        return view('acts.media', compact('act', 'user'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
