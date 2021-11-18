<?php 
include("menu.php"); #Emite apenas um alerta, e segue o script.
require("menu.php"); #Emite emite um fatal erro, e encerra o script.

// A diferença entre esses normais e o "once" é que o "Once" só chama 1 vez e não repete.
echo "conteúdo";
?> 