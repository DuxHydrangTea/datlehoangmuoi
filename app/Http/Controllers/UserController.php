<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::withoutAdmin()->get();
        return view('client.users.index', compact('users'));
    }
    public function setRole(Request $request, $id)
    {

        $user = User::find($id);
        // dd([$request->all(), $user]);
        if (!$user)
            return redirect()->back();

        $user->update(
            ['role' => $request->role]
        );
        return redirect()->back();
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}