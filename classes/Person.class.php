<?php

require_once 'Conexao.class.php';
require_once 'Funcoes.class.php';

class Person {

    private $con;
    private $objFunc;
    private $idPerson;
    private $name;
    private $phone;

    public function __construct() {
        $this->con = new Conexao();
        $this->objFunc = new Funcoes();
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    /**
     * 
     */
    public function queryInsert($array) {

        $strCampos = "";
        $strValue = "";
        try {
            foreach ($array as $key => $value) {
                $this->$key = $this->objFunc->tratarCaracter($value, 1);
            }

            foreach ($array as $key => $value) {
                $strCampos .= "`" . $key . "`,";
                $strValue .= ":" . $key . ",";
            }
            $cst = $this->con->conectar()->prepare(
                    "INSERT INTO `person` (" . substr($strCampos, 0,-1) . ") VALUES (" . substr($strValue, 0,-1) . ");"
            );

            $cst->bindParam(":name", $this->name, PDO::PARAM_STR);
            $cst->bindParam(":phone", $this->phone, PDO::PARAM_STR);

            if ($cst->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
    public function querySelect() {
        try {
            $cst = $this->con->conectar()->prepare(""
                    . "SELECT * FROM `person`;");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

}

?>
