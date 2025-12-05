<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Suppot;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register");
    }
    public function store(Request $req)
    {
        $row = DB::table('users')->where('email', $req->email)->first();

        if (empty($row) == true) {
            DB::table('users')->insert(['name' => $req->name, 'email' => $req->email, 'password' =>  Hash::make($req->password)]);

            return redirect('/login');
        } else

            echo 'Already exists';
    }
}
