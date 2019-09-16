<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index () {
        return view("users", ["users" => User::all()]);
    }
    public function edit($id){
        $user = User::where('id', $id)->first();
        
        return view('edit', compact('user'));
    }
    public function update($id, Request $request){
        $sentData = $request->only(["ime","prezime","email","password"]);
        $user = User::where('id', $id)->first();
        $user->ime = $sentData['ime'];
        $user->prezime = $sentData['prezime'];
        $user->email = $sentData['email'];
        $user -> save();
        redirect('/users');
        return redirect('/users');
    }
    public function delete($id, Request $request) {
        $user = User::where('id', $id)->first();
        $user -> delete();
        return redirect('/users');
    }
}
