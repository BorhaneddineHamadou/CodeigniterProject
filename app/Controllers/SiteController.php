<?php

namespace App\Controllers;

class SiteController extends BaseController{
    public function simple(){
        return view('site/simple');
    }

    public function aboutUs(){
        // //echo view ('includes/header');
        // $data = array(
        //     "name" => "Borhaneddine",
        //     "age" => "20",
        //     "email" => "kb_hamadou@esi.dz"
        // );
        // echo view('site/aboutUs', $data);
        // //echo view('site/aboutUs', compact("data"));
        // //echo view('includes/footer');

        return view('site/aboutUs');
    }

    public function contactUs(){
        return view('site/contactUs');
    }
}