<?php
class EnlacesPaginas
{
    public function enlacesPaginasModel($enlacesModel)
    {
        if($enlacesModel== "nosotros" || 
            $enlacesModel =="servicios"||
            $enlacesModel=="contactenos")
        {
                $model="Vista/modelos/".$enlacesModel.".php";
        }
        else
        if($enlacesModel == "index")
        {
            $model="Vista/modelos/inicio.php";
        }
        else{

            $model="Vista/modelos/inicio.php";
        }
           return $model;
    }
}


?>
