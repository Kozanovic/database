<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('index', ['users' => $users]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prenom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.unique' => 'L\'email est deja utilisee, veuillez entrer un autre email.',
            'email.email' => 'L\'email doit etre en format email.',
        ]);

        DB::table('users')->insert([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
        ]);

        return redirect('/users')->with('message', 'utilisateur ajoute avec succes!');
    }
    public function edit($id)
    {
        $user = DB::table('users')->where('matricule', $id)->first();
        return view('edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prenom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.unique' => 'L\'email est deja utilisee, veuillez entrer un autre email.',
            'email.email' => 'L\'email doit etre en format email.',
        ]);

        DB::table('users')
            ->where('matricule', $id)
            ->update([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
            ]);

        return redirect('/users')->with('message', 'Utilisateur mis a jour avec succes !');
    }
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'utilisateur supprime avec succes!');
    }
}
