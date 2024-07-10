<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // Afficher toutes les actualités
    public function index()
    {
        return News::all();
    }

    // Créer une nouvelle actualité
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $news = News::create($request->all());

        return response()->json(['news' => $news], 201);
    }

    // Afficher une actualité spécifique
    public function show($id)
    {
        return News::findOrFail($id);
    }

    // Mettre à jour une actualité
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $news = News::findOrFail($id);
        $news->update($request->all());

        return response()->json(['news' => $news], 200);
    }

    // Supprimer une actualité
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return response()->json(['message' => 'News deleted successfully'], 200);
    }
}
