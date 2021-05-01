<?php
class MvcController{
    public function plantilla(){
 
  include "Vista/template.php";
    
    }
    public function enlacesPaginaControler()
    {
        if(isset($_GET["action"]))
        {
            $enlacesController =$_GET["action"];
        }
        else
        {
            $enlacesController ="index";

        }
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }
}
