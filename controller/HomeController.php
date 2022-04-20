<?

require "model/UsuarioModel.php";

class HomeController
{
    public function Index(){
        include "view/Index.php";
    }
    public function Login(){
        include "view/login.php";
    }
}

?>