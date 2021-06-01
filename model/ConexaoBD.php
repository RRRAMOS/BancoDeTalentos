<?php
Class ConexaoBD {

    private $servername = "localhost";
    private $username = "root";
    private $password = "12345678";
    private $dbname = "bd_curriculos";

    public function conectar()
    {
        $conn = new mysqli($this ->servername, $this->username, $this->password, $this->dbname);
        return $conn;
    }
}

?>
