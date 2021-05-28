<?php
    

    class Api{
        static $API = null;
        function __construct(){
            
        }
        

    }




    // $_DATA = file_get_contents("php://input");
    // $_HEDER = (array) apache_request_headers();
    // $_CONFIG = array_column(json_decode(file_get_contents("Api/Entidades/config.json"), true)["file"],"Content-Type");
    
    // if(isset($_HEDER["Content-Type"]) && array_search($_HEDER["Content-Type"], $_CONFIG)!=''){
    //     $_REQUEST["DATA"] = json_decode($_DATA);
    // }else{
    //     $_REQUEST["DATA"] = "El encabezado no es permitido";
    // }
    // print_r($_REQUEST["DATA"]);
    


?>