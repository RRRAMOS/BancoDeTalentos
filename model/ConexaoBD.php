<?php
Class ConexaoBD {

private $serverName = "localhost";
private $userName = "root";
private $password = "";
private $dbName = "bd_curriculos";
}

public function conectar ()
{
    $conn = new mysql($this ->serverName, $this->userName, $this->passaword, $this->dbName);
    return $conn;
}

?>