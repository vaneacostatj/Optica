<?php

namespace App\Controllers;

class serviciosController extends BaseController
{
    public function serviciosIndex()
    {
        echo view('layouts/headerUnivers');
        echo view('servicios');
        echo view('layouts/footer');
    }
}