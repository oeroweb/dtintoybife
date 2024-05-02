<?php

  require_once '../../config/db.php';
  $sql = "SELECT * FROM tabla_descansosemanal";

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