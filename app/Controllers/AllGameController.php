<?php

namespace App\Controllers;

class AllGameController extends BaseController
{
    public function index()
    {
         // Panggil view navbar
         $navbar = view('templates/navbar');
         // Panggil view navbar
         $footer = view('templates/footer');

         
         // Tampilkan view utama dengan menyertakan view navbar dan content
        return view('details/allGameDetails', ['navbar' => $navbar, 'footer' => $footer]);
    }
}