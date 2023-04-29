<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function list()
    {
        echo "Elenco utenti presenti sul sistema ...";
    }

    public function show($id)
    {
        echo "Identificativo utente: " . $id;
    }
}
