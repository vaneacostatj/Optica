<?php

namespace App\Controllers;

class contactanosController extends BaseController
{
    public function contactanos()
    {
        echo view('layouts/headerUnivers');
        echo view('contactanos');
        echo view('layouts/footer');
    }
}