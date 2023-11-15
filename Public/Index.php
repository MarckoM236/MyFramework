<?php 
//require_once "../App/Controllers/Controller.php";
//require_once "../App/Controllers/WelcomeController.php";
require_once "../autoload.php";
require_once "../App/Helpers/ViewHelper.php";

if (isset($_GET['class']) && !empty($_GET['class'])) {
    $className = $_GET['class'];

    // Validate the class name (make sure it only contains safe characters)
    if (preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $className)) {
        $fullClassName = 'App\\Controllers\\' . $className;
        // Check if the class exists
        if (class_exists($fullClassName)) {
            
            $class = new $fullClassName();
            // Validate and call the method if provided
            if (isset($_GET['method']) && !empty($_GET['method'])) {
                $methodName = $_GET['method'];
                
                // Validate the method name (make sure it only contains safe characters)
                if (preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $methodName)) {
                    // Check if the method exists in the class
                    if (method_exists($class, $methodName)) {
                        // Call the method
                        if(isset($_GET['id']) && !empty($_GET['id'])){
                            //Validate the id (integer)
                            if(preg_match('/^\d+$/', $_GET['id'])){
                                $class->$methodName($_GET['id']);
                            }
                            else{
                                echo "El ID '".$_GET['id']."' No es valido";
                            }
                        }
                        else{
                            $class->$methodName();
                        }
                        
                    } else {
                        echo "El método '$methodName' no existe en la clase '$className'.";
                    }
                } else {
                    echo "Nombre de método no válido.";
                }
            }
        } else {
            echo "La clase $className no existe.";
        }
    } else {
        echo "Nombre de clase no válido.";
    }
}

