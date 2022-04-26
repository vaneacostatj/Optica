<?php

namespace App\Controllers;

class adminController extends BaseController
{
    public function adminIndex()
    {
        echo view('layouts/headerAdmin');
        echo view('Admin/Admin');
        echo view('layouts/footerAdmin');
    }
}