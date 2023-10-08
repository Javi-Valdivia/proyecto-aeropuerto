<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']= 'Pagina Principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo']= 'Quienes Somos';
        echo view('front/head_view',$data);        
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    public function acerca_de()
    {
        $data['titulo']= 'Acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
    public function registro()
    {
        $data['titulo']= 'Registrar';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/registro');
        echo view('front/footer_view');
    }
    public function login()
    {
        $data['titulo']= 'Login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/login');
        echo view('front/footer_view');
    }
    public function contacto()
    {
        $data['titulo']= 'Contacto';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }

    public function vuelos()
    {
        $data['titulo']= 'Vuelos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/vuelos');
        echo view('front/footer_view');
    }
    
}
