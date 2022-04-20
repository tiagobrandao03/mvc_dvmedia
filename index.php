<?php

require "controller/HomeController.php";

// $ctrl=new Controller();
// $ctrl->Index();

$pagina=isset($_GET["pagina"])? $_GET["pagina"]:"index";

$ctrl= new HomeController();

switch($pagina){
    case "index":
        $ctrl->Index();
    break;
    case "Login":
        $ctrl->Login();
    break;
    case "painel":
        $ctrl->Painel();
        break;
}
?>