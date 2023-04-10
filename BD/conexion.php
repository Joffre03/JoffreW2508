<?php
$host_db="sql207.epizy.com"; //donde esta la base de datos *servidor, puerto 3306 por default siempre --crear obejto$
$user_db="epiz_33685877"; // nombre del usuario de la base de datos 
$pass_db="4G0Ah8D1IQ61"; //password de la base de datos 
$name_db="epiz_33685877_DBweb1";//Nombre de la base de datos

$conexion= new mysqli($host_db, $user_db, $pass_db, $name_db); // se cera nueva función o variables

if($conexion -> connect_error){ //si la conexion es exitosa 
    echo"<h1>Conexión con exito</h1>"; //arroja un mensaje directo (echo) de conexion exitosa 
}else{// de lo contrario 
    echo"<h1>Conexion con exito</h1>";
} 
    
?>