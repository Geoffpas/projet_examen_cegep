<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class FaitController extends Controller
{
    /**
     * Affiche le formulaire d'ajout d'un fait.
     *
     * @return View
     */
    public function create()
    {
        return view("faits.create");
    }

    /**
     * Traite l'ajout des informations du formulaire.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $valides = $request->validate([
            "texte" => "required|min:1|max:255",
        ], [
            "texte.max" => "Le texte doit avoir un maximum de 255 caractères",
            "texte.min" => "Le texte doit avoir au moins 1 caractère",
        ]);

        // Ajouter le nouveau fait à la base de données
        $fait = new Fait;
        $fait->texte = $valides["texte"];
        $fait->save();

        // Redirection vers la page d'accueil avec un message de succès
        return redirect()
            ->route('faits.index')
            ->with('succes', "La note a été ajoutée avec succès!");
    }

    /**
     * Affiche la liste des faits.
     *
     * @return View
     */
    public function index()
    {
        // Récupération de tous les faits depuis la base de données
        $faits = Fait::all();

        // Formatage du texte pour chaque fait en utilisant la classe Str
        $faitsFormatted = [];
        foreach ($faits as $fait) {
            $formattedText = Str::limit($fait->texte, 60);
            $faitsFormatted[] = [
                'id' => $fait->id,
                'texte' => $formattedText,
            ];
        }

        // Passage des données formatées à la vue
        return view('faits.index', [
            'faits' => $faitsFormatted
        ]);
    }

    /**
     * Affiche le formulaire de modification
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        return view('faits.edit', [
            "fait" => Fait::findOrFail($id)
        ]);
    }

    /**
     * Met à jour les informations d'un fait dans la base de données.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $valides = $request->validate([
            "id" => "required|integer",
            "texte" => "required|min:1|max:255",
        ], [
            "texte.max" => "Le texte doit avoir un maximum de 255 caractères",
            "texte.min" => "Le texte doit avoir au moins 1 caractère",
        ]);

        $fait = Fait::findOrFail($valides["id"]);
        $fait->texte = $valides["texte"];
        $fait->save();

        return redirect()
            ->route('faits.index')
            ->with('succes', "Le fait a été modifié avec succès!");
    }

    /**
     * Traite la suppression
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
        Fait::destroy($request->id);

        return redirect()->route('faits.index')
                ->with('succes', "Le fait a été supprimé!");
    }
}
