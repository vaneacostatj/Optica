<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layouts/headerHome');
        echo view('home');
        echo view('layouts/footer');
    }

    public function nosotros()
    {
        echo view('layouts/headerUnivers');
        echo view('nosotros');
        echo view('layouts/footer');
    }
    public function curiosidades()
    {
        echo view('layouts/headerHome');
        echo view('tips/curiosidades');
        echo view('layouts/footer');
    }
    public function tips()
    {
        echo view('layouts/headerHome');
        echo view('tips/tips');
        echo view('layouts/footer');
    }
    public function recomendaciones()
    {
        echo view('layouts/headerHome');
        echo view('tips/recomendaciones');
        echo view('layouts/footer');
    }
}
