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
            'pageTitle' => "Jardicare",
            'metaDesc' => "Découvrez Jardicare le site de Olivier Defosseux, Olivier Defosseux est entrepreneur de jardin, il déploie son activité du côté de Wavre",
            'metaKeyWords' => "Olivier Defosseux, entrepreneur de jardin indépendant, jardinier",
            'resetCss' => "assets/css/reset.css",
            'customCss' => "assets/css/onePage.css",
            'data' => $data,
        ]);
    }
}
