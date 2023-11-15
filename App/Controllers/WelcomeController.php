<?php

namespace App\Controllers;

class WelcomeController extends Controller{

    public function __construct() {}

    public function index(){
        $title = "prueba1";
        $nombre = "cosme fulanito";
        //$content = __DIR__ . '/../Views/welcome.php';
        //include_once (__DIR__ . '/../Views/layouts/_template.php');

        $this->view('Layouts/_template',['title'=>$title,'name'=>$nombre]);
    }

    public function create(){
        $name = $_POST['nombre'];
        $this->view('Layouts/_template',['name'=>$name]);
    }

    
}