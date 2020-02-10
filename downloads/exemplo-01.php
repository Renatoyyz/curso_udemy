<?php

     $link = "https://media.istockphoto.com/photos/emperors-picture-id147290529";

     $content = file_get_contents($link);

     $parse = parse_url($link);

     $basename = basename($parse["path"]);

     $file = fopen($basename,"w+");

     fwrite($file, $content);

     fclose($file);

?>

<img src="<?=$basename?>">