<?php 
#Cifrar contraseñas con funcion crypt
$password = "root";
$semilla = "semilla";
echo crypt($password, $semilla);


if(crypt($password, $semilla) == "seA/6v3hNAL1."){
    echo "COINCIDEN";
}else{
    echo "ERROR";
}

?>