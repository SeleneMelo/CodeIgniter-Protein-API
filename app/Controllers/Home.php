<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function contato()
    {
        return view('contato'); //essas são as páginas do site, ex www.meusite.com.br/home/contato
    }
}
