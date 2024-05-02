<?php

define('DB_HOST', 'localhost');		
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','dtinto');

$db= mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
  $sql = "SELECT * FROM tabla_horasBloqueadas";

  $result = mysqli_query($db, $sql);

  if(!$result){
    die("Error! Fallo de Comunicación");
  }else{
    while($data = mysqli_fetch_assoc($result)){
      $arreglo['data'][]= $data;
      
    }
    echo json_encode($arreglo);
  }
mysqli_free_result($result);
mysqli_close($db);

?>