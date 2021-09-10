<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function editprofile()
    {
        return view('user.editprofile');
    }

    public function update(Request $request, $id)
    {
        User::where('id', $id)
            ->update([
                'name' => ucwords($request->name),
                'address' => $request->address,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'birthcity' => ucwords($request->birthcity),
                'birthdate' => $request->birthdate
            ]);
            return redirect(route('datasiswa'));
    }
}
