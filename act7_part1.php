<?php
  $nombre = (isset($_POST['nombre']) && $_POST{'nombre'} != " ") ? $_POST{'nombre'} : "No ingreso Nombre";
  $nombre2 = ($_POST['nombre2']);
  $appa = (isset($_POST['appa']) && $_POST{'appa'} != " ") ? $_POST{'appa'} : "No ingreso Ap. Paterno";
  $apma = (isset($_POST['apma']) && $_POST{'apma'} != " ") ? $_POST{'apma'} : "No ingreso AP. Materno";
  $fn = (isset($_POST['fn']) && $_POST{'fn'} != " ") ? $_POST{'fn'} : "No ingreso fecha de nacimiento";
  $col = (isset($_POST['col']) && $_POST{'col'} != " ") ? $_POST{'col'} : "No ingreso colegio";
  $RFC = (isset($_POST['RFC']) && $_POST{'RFC'} != " ") ? $_POST{'RFC'} : "No ingreso RFC";
  $cont = (isset($_POST['cont']) && $_POST{'cont'} != " ") ? $_POST{'cont'} : "No ingreso contraseña";

  $nombre= $nombre[0];
  $appa = strtoupper($appa);
  $appa=substr($appa,0,2);
  $apma=$apma[0];
  $fn1= substr($fn,0,2);
  $fn2= substr($fn, -7, -5);
  $fn3= substr($fn, -2);
  if ($_POST['nombre2']) {
    // code...
    $nombre2= $nombre2[0];
    $r2=$appa.$apma.$nombre.$nombre2.$fn3.$fn2.$fn1;
    $r1= substr($RFC,0, 11);
    if ($r2 == $r1) {
      // code...
      echo $RFC." es valido";
    }else {
      // code...
      echo $RFC." no es valido";
    }
  }else {
    // code...
    $r2=$appa.$apma.$nombre.$fn3.$fn2.$fn1." ";
    $r1=substr($RFC,0, 10)." ";
    if ($r2 === $r1 ) {
      // code...
      echo $RFC." es valido";
    }else {
      // code...
      echo $RFC." no es valido";
    }
  }
  /*if (preg_match('/[\.\?\*\+\\\$\^\(\)\[\]\|\{\}=!_¡¿><\'%&\-#\"~,:;]+/', $cont)){
    // code...
    if ('/[0-9]+/') {
      // code...
      if ('/[a-zA-Z]+/') {
      // code...
       echo "<br>Contraseña ".$cont." es segura.";
      }
     }
  }else {
    // code...
    echo "<br>Contraseña ".$cont." es insegura. Para ser una contraseña segura debe contener por lo menos una letra, numero y un carácter especial";
  }*/
 ?>
