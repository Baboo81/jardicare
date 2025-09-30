<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnePageController extends Controller
{
    public function index()
    {
        //Inclure les datas :
        $data = include resource_path('data/onepageData.php');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('onepage', [
            'pageTitle' => "Jardicare - Jardinier & Entrepreneur de jardin à Ottignies, Louvain-La-Neuve, Wavre, Lasne, Rixensart",
            'metaDesc' => "Jardicare, le site de Olivier Defosseux, jardinier et entrepreneur de jardin en Brabant wallon. Entretien de jardin, taille de haies, aménagement paysager à Ottignies, Louvain-la-Neuve, Wavre, Rixensart, Lasne.",
            'metaKeyWords' => "Jardicare, jardinier Ottignies, jardinier Louvain-la-Neuve, jardinier Wavre, entrepreneur de jardin Brabant wallon, entretien jardin, taille haies, aménagement paysager, tonte gazons, plantations, élagage.",
            'resetCss' => "assets/css/reset.css",
            'customCss' => "assets/css/onePage.css",
            'data' => $data,
        ]);
    }
}
