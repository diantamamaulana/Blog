<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = \App\User::all();
        return view('indexMembership', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $memberships = \App\Membership::get();
        return view('createMembership', compact('memberships'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new \App\User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->membershipId = $request->get('membership');
        $password = Hash::make($request->get('password'));
        $user->password = $password;

        $user->save();
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
        $user = \App\User::find($id);
        $memberships = \App\Membership::get();
        return view('editMembership', compact('user','memberships'));

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
        $user = \App\User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->membership = $request->get('membership');
        $user->password = $request->get('oldPassword');

        $user->save();
        return redirect('memberships')->with('success', 'Data telah diubah');
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
        $user = \App\User::find($id);
        $user->delete();
        return redirect('memberships')->with('success', 'Data pengguna telah dihapus');
    }
}
