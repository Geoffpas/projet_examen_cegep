<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AccueilController extends Controller
{
    /**
     * affiche la vue d'accueil et récupère un fait aléatoirement.
     *
     * @return view
     */
    public function index()
    {
        $fait = Fait::inRandomOrder()->first();

        return view("accueil", [
            "fait" => $fait,

        ]);
    }
}
