<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      include_once "bd.php";

      $matricula = $_POST["matricula"];
      $nome = $_POST["nome"];
      $data_nasc = $_POST["data_nasc"];
      $pa = $_POST["pa"];
      $npa = $_POST["npa"];
      $srmla = $_POST["srmla"]; //value=1 -> srm, value=2 -> la
      $aee = $_POST["aee"];
      $suplcompl = $_POST["suplcompl"]; //value=compl, value=supl
      $apai = $_POST["apai"];
      $pe = $_POST["pe"];
      $oj = $_POST["oj"];
      $ol = $_POST["ol"];
      $pcc = $_POST["pcc"];
      $lap = $_POST["lap"];
      $srm;
      $la;
      $supl;
      $compl;

      if($pa)
        $pa = "SIM";
      else if(!$pa)
        $pa = "NAO";

      if($npa)
        $npa = "SIM";
      else if(!$npa)
        $npa = "NAO";

      if($srmla == 1)
      {
        $srm = "SIM";
        $la = "NAO";
      }
      else if($srmla == 2)
      {
        $srm = "NAO";
        $la = "SIM";
      }

      if($aee)
        $aee = "SIM";
      else if(!$aee)
        $aee = "NAO";

      if($suplcompl == "supl")
      {
        $supl = "SIM";
        $compl = "NAO";
      }
      else if($suplcompl == "compl")
      {
        $supl = "NAO";
        $compl = "SIM";
      }
      else if(!$suplcompl)
      {
        $supl = "NAO";
        $compl = "NAO";
      }

      if($apai)
        $apai = "SIM";
      else if(!$apai)
        $apai = "NAO";

      if($pe)
        $pe = "SIM";
      else if(!$pe)
        $pe = "NAO";

      if($oj)
        $oj = "SIM";
      else if(!$oj)
        $oj = "NAO";

      if($ol)
        $ol = "SIM";
      else if(!$ol)
        $ol = "NAO";

      if($pcc)
        $pcc = "SIM";
      else if(!$pcc)
        $pcc = "NAO";

      if($lap)
        $lap = "SIM";
      else if(!$lap)
        $lap = "NAO";

      $comando = "INSERT INTO aluno (nome, matricula, data_nasc, pa, npa, srm, la, aee, comp, sup, pai, pe, oj, oc, pcc, lap) VALUES ('".$nome."', '".$matricula."', '".$data_nasc."', '".$pa."', '".$npa."', '".$srm."', '".$la."', '".$aee."', '".$compl."', '".$supl."', '".$apai."', '".$pe."', '".$oj."', '".$ol."', '".$pcc."', '".$lap."')";
      $BD = new BD();
      $BD->comando($comando);
      header("Location: cadastro_efetuado_aluno.html");
     ?>
  </body>
</html>
