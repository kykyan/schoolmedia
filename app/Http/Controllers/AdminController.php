<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Group;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function datasiswa()
    {
        $data['users'] = User::all();
        return view('admin.datasiswa', $data);
    }

    public function siswashow(User $user)
    {
        return view('admin.siswashow', compact('user'));
    }
    
    public function siswaedit(User $user)
    {
        return view('admin.siswaedit', compact('user'));
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

    public function destroy($id)
    {
        User::destroy($id);
        return redirect(route('datasiswa'));   

    }
}
