<?php

    $data = array(
        "empresa"=>"Witcare Solucoes Medicas"
    );
    
     setcookie("NOME_DO_COOKIE", json_encode($data), time()+30);

     echo "OK";
