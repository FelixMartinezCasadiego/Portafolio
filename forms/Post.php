<?php

  $name = $_POST['name'];
  $email = $_POST['email'];

  if($name === '' || $email === ''){
    echo json_encode('llena todos los campos');
  }else{
    echo json_encode('Correcto: <br>Name:'.$name.'<br> Email:'.$email)
  }
?>
