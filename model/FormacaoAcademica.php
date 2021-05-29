<?php
Class FormacaoAcademica{

    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;
}

public function setID($id)
{
    $this->id = $id;
}
public function getID()
{
    return $this->id;
}
public function setIdUsuario($idusuario)
{
    $this->idusuario = $idusuario;
}
public function getIdUsuario()
{
    return $this->idusuario;
}
public function setInicio($inicio)
{
    $this->inicio = $inicio;
}
public function getInicio()
{
    return $this->inicio;
}
public function setFIM($fim)
{
    $this->fim = $fim;
}
public function getFIM()
{
    return $this->fim;
}
public function setDescricao($descricao)
{
    $this->descricao = $descricao;
}
public function getDescricao()
{
    return $this->descricao;
}

public function inserirBD()
{
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO formacaoAcademica 
            (idusuario, inicio, fim, descricao)
    VALUES(
        '".$this->idusuario."',
        '".$this->inicio."',
        '".$this->fim."',
        '".$this->descricao."')";

    if($conn->query($sql)=== TRUE){
        $this->id = mysql_insert_id($conn);
        $conn->close();
        return TRUE;
    }else {
        $conn->close();
        return FALSE;
    }
}

public function excluirBD($cpf)
{
    require_once 'Conexao.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM formacaoAcademica 
    WHERE idformacaoAcademica = '".$id ."';";

    if($conn->query($sql)=== TRUE){

        $conn->close();
        return TRUE;
        
    }else {
        $conn->close();
        return FALSE;
    }
}
public function listaFormaçoes($cpf)
{
    require_once 'Conexao.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT *FROM formacaoAcademica WHERE
     idusuario= '".$idusuario."'", 
       $re = $conn->query($sql);
       $conn->close();
       return $re;

}    
?>