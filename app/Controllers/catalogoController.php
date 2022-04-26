<?php

namespace App\Controllers;
use App\Models\lentes;


class catalogoController extends BaseController
{
    public function catalogoIndex()
    {
        $Lentes = new lentes();
        $datos['Lente']= $Lentes->orderBy('id','asc')->findAll();

        echo view('layouts/headerUnivers');
        echo view('catalogo',$datos);
        echo view('layouts/footer');
    }

    public function catalogoDama()
    {
        $Lentes = new lentes();
        $datos['Lente']= $Lentes->orderBy('id','asc')->findAll();

        echo view('layouts/headerUnivers');
        echo view('catalogo/dama',$datos);
        echo view('layouts/footer');
    }
    public function catalogoCaballero()
    {
        $Lentes = new lentes();
        $datos['Lente']= $Lentes->orderBy('id','asc')->findAll();

        echo view('layouts/headerUnivers');
        echo view('catalogo/caballero',$datos);
        echo view('layouts/footer');
    }
    public function catalogoInfantil()
    {
        $Lentes = new lentes();
        $datos['Lente']= $Lentes->orderBy('id','asc')->findAll();

        echo view('layouts/headerUnivers');
        echo view('catalogo/infantil',$datos);
        echo view('layouts/footer');
    }
    public function catalogoDeportiva()
    {
        $Lentes = new lentes();
        $datos['Lente']= $Lentes->orderBy('id','asc')->findAll();

        echo view('layouts/headerUnivers');
        echo view('catalogo/deportivo',$datos);
        echo view('layouts/footer');
    }
    public function catalogoLentes()
    {
        $Lentes = new lentes();
        $datos['Lente']= $Lentes->orderBy('id','asc')->findAll();

        echo view('layouts/headerUnivers');
        echo view('catalogo/lentes',$datos);
        echo view('layouts/footer');
    }
    public function catalogoAccesorios()
    {
        $Lentes = new lentes();
        $datos['Lente']= $Lentes->orderBy('id','asc')->findAll();

        echo view('layouts/headerUnivers');
        echo view('catalogo/accesorios',$datos);
        echo view('layouts/footer');
    }
}