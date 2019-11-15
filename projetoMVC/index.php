<?php 
  $rota = key($_GET)?key($_GET):"home";

  $controller = $rota."Controller";

  include "controllers/".$controller.".php";

  $obj = new $controller();

  $obj->acao($rota);

  // var_dump($rota);



?>