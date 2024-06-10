<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfraestructuraController extends Controller
{
    public function index()
    {
        $sidebarItems = [
            ['name' => 'Laboratorio de patología apícola', 'url' => '/laboratorios'],
            ['name' => 'Laboratorio de inocuidad y calidad de miel y sus derivados', 'url' => '/lab-inocuidad'],
            ['name' => 'Laboratorio de UHPLC', 'url' => '/lab-uhplc'],
            ['name' => 'Laboratorio de Biología molecular', 'url' => '/lab-biologia-molecular'],
            ['name' => 'Conservación de especies botánicas y entomológicas', 'url' => '/conservacion-especies'],
        ];

        return view('infraestructura', compact('sidebarItems'));
    }
}
