<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfraestructuraController extends Controller
{
    public function index()
    {
        $sidebarItems = [
            ['name' => 'Laboratorio de patología apícola', 'url' => '#'],
            ['name' => 'Laboratorio de inocuidad y calidad de miel y sus derivados', 'url' => '#'],
            ['name' => 'Laboratorio de UHPLC', 'url' => '#'],
            ['name' => 'Laboratorio de Biología molecular', 'url' => '#'],
            ['name' => 'Conservación de especies botánicas y entomológicas', 'url' => '#'],
        ];

        return view('infraestructura', compact('sidebarItems'));
    }
}
