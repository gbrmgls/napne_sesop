<?php

/**
 * Description of DataBase: classe responsável por se conectar a um banco de dados
 * receber uma consulta SQL e devolver o resultado.
 *
 * @author Joao
 */

class DataBase{
    private $user;
    private $password;
    private $host ;
    private $database;

    /* Cria uma instancia de DataBase com os valores de conexão já preparados */
    function __construct()
    {
        $this->user = "root";
        $this->password = "";
        $this->host = "localhost";
        $this->database = "napne_sesop";
    }

    /* Método que recebe uma consulta SQL, se conecta com o banco de dados, realiza a consulta, fecha a conexão e devolve o resultado */
    function makeQuery($query)
    {
        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database) or die("Unable to connect!");

        $result = mysqli_query($connection, $query);

        mysqli_close($connection);

        return $result;
    }
}
