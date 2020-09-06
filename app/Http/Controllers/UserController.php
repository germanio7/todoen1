<?php

namespace App\Http\Controllers;

use App\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $users->map(function($item){
            if ($item->avatar) {
                $item->avatar = url($item->avatar);
            }
        });
        return Inertia::render('Users/Index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'string|min:8',
            'file' => 'nullable|mimes:png,jpeg,jpg'
        ]);

        if ($request->hasFile('file')) {
            $name = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('avatar'), $name);
            $aux = 'avatar/'.$name;
        } else $aux = null;

        $data['avatar'] = $aux;
        unset($data['file']);

        User::create($data);

        return Redirect::route('users.index')->with('message', 'Usuario Creado');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if ($user->avatar) {
            $user->avatar = url($user->avatar);
        }

        return Inertia::render('Users/Edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:8',
            'file' => 'nullable|mimes:png,jpeg,jpg'
        ]);

        if (strlen($data['password']) > 0) {
            $data['password'] = bcrypt($data['password']);
        } else unset($data['password']);

        if ($request->hasFile('file')) {
            $name = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('avatar'), $name);
            if (file_exists($user->avatar)) {
                @unlink($user->avatar);
            }
            $aux = 'avatar/'.$name;
        } else $aux = $user->avatar;

        $data['avatar'] = $aux;
        if (strlen($data['password']) > 0) {
            $data['password'] = bcrypt($data['password']);
        } else unset($data['password']);
        unset($data['file']);

        $user->update($data);

        return Redirect::route('users.index')->with('message', 'Usuario Actualizado');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return Redirect::route('users.index')->with('message', 'Usuario Eliminado');
    }
}
