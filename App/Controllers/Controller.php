<?php

namespace App\Controllers;

class Controller {

    public function __construct() {}

    protected function view($view, $data = [],$redirect=null){
        $data = $data;
        include(__DIR__ . '/../Views/' . $view . '.php');  
        
        if ($redirect !== null) {
            header("Location: " . $redirect);
            exit();
        }
    }
}