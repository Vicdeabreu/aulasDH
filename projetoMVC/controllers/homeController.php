<?php 

  class homeController{

    public function acao($acao){
      switch($acao){
        case "home":
          $this->viewHome();
        break;
        default:
          $this->viewHome();
          break;
      }
    }

    /* --- Todo lo que el usuario digite debe ser mapeado para poder generar un retorno ---- */

    function viewHome(){
      include "views/home.php";
    }
  }

  

?>