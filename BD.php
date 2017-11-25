<?php
  class BD
  {

    public $DB_HOST;
    public $DB_USER;
    public $DB_PASS;
    public $DB_NAME;
    public $conn;

    public function BD()
    {
      //DB local (XAMPP)
      $this->DB_HOST = "localhost";
      $this->DB_USER = "root";
      $this->DB_PASS = "";
      $this->DB_NAME = "napne_sesop";

    }

    public function comando($sql)
    {

      $this->conn = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);

      if($this->conn->connect_errno != 0)
      {
        die("Impossível conectar-se ao banco. Erro: [".$this->conn->connect_error."]");
      }

      if(!$retorno = $this->conn->query($sql))
      {
        die("Impossível executar comando SQL. Erro: [".$this->conn->error."]");
      }

      $primeiro = explode(" ", $sql);
      if(strtoupper($primeiro[0]) == "SELECT")
      {
        return $retorno;
      }

    }

  }

 ?>
