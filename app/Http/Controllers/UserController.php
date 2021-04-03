<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{

/*     public function __construct()
    {
        $this->middleware('auth');
    }
     */

    public function index()
    {
    /*     if(request()->user()->hasRole('user')){
            return view('user.index');
        }
        else{
            return redirect('/');
        } */

        $users = User::with(['roles', 'biographies'])->get();

        return view('user.index', compact('users'));
        // dd($users);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
