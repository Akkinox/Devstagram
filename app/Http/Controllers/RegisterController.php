<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
        //Modificacion del request
        $request->request->add(['username' => Str::slug($request->username)]);

        //Validaciones de request
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'username' => 'required|unique:users|max:20',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:6'
        ]);


        //Crear usuario
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //Autenticar usuario
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);
        //Otra forma de autenticar
        // auth()->attempt($request->only('email', 'password'));
        //Redireccionar
        return redirect()->route('posts.index');
    }

}
