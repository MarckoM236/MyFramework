<?php 
namespace App\Models;



class BaseModel{
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;

    public function __construct(){
        $this->dbHost = getenv('DB_HOST');
        $this->dbUser = getenv('DB_USER');
        $this->dbPass = getenv('DB_PASS');
        $this->dbName = getenv('DB_NAME');
    }

    private function Connection(){
        try {
            $conexion = new \PDO("mysql:host=localhost;dbname=planta", "root", "");
            $conexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conexion;
            echo "¡Conexión exitosa!";
        } catch (\PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    protected function getConnection(){
        return $this->Connection();
    }

    function getData($sql)
    {
        $data = array();

        try {
            $stmt = $this->Connection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll( \PDO::FETCH_ASSOC);

            if ($result !== false) {
                $data = $result;
            }
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage());
        }

        return $data;
    }
}

