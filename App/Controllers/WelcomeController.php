<?php

namespace App\Controllers;

use \App\Models\User;

class WelcomeController extends Controller{
    
    public function __construct() {}

    public function index(){
        $title = "prueba1";
        $nombre = "cosme fulanito";
        //$content = __DIR__ . '/../Views/welcome.php';
        //include_once (__DIR__ . '/../Views/layouts/_template.php');

        $this->view('Layouts/_template',['title'=>$title,'name'=>$nombre]);
    }

    public function create($id=null){
        $name = $_POST['nombre'];
        $this->view('Layouts/_template',['name'=>$name,'id'=>$id]);
    }

    public function query(){
        $user = new User();
        $sql = "select * from empleados";
        $this->view('Layouts/_template',$user->getData($sql));
    }

    
}