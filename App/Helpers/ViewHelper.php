<?php

function includeView($view, $data = []){
    $data = $data;
    include(__DIR__ . '/../Views/' . $view . '.php');    
}

function route($path,$id){
    return $path . '/' . $id;
}
