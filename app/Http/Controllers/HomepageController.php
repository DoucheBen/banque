<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PharIo\Manifest\Application;

class HomepageController extends Controller
{
    /**
     * Permet d'afficher la page d'accueil du site
     * @return Application|Factory|view
     *
     */

    public function index()
    {
        return view('homepage.home');
    }
}
