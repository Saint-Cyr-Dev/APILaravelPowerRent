<?php

//namespace App\Http\Controllers;

/*use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;*/

class UserController extends Controller
{
    /* Afficher tous les utilisateurs
    public function index()
    {
        return User::all();
    }

     Créer un nouvel utilisateur
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['user' => $user], 201);
    }

     Afficher un utilisateur spécifique
    public function show($id)
    {
        return User::findOrFail($id);
    }

     Mettre à jour un utilisateur
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json(['user' => $user], 200);
    }

     Supprimer un utilisateur
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }

     Afficher le profil de l'utilisateur authentifié
    public function profile(Request $request)
    {
        $user = Auth::user();
        return response()->json(['user' => $user]);
    }

     Envoyer un e-mail de bienvenue à l'utilisateur authentifié
    public function sendWelcomeEmail()
    {
        $user = auth()->user();  Récupérer l'utilisateur authentifié

        Mail::to($user->email)->send(new WelcomeEmail());

        return "L'e-mail de bienvenue a été envoyé à " . $user->email;
    }
    */
}
