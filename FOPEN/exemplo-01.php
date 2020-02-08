<?php

    $file = fopen("log.txt","a+");
    fwrite($file, "\r\nRenato Oliveira");
    fclose($file);

    echo "Arquivo criado com sucesso";

?>