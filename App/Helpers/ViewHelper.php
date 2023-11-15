<?php

function includeView($view, $data = []){
    $data = $data;
    include(__DIR__ . '/../Views/' . $view . '.php');    
}
