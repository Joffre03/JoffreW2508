<?php
include "conexion.php";
$consulta_sql="SELECT * FROM persona"; //almacenar consulta en una variable 

//$conexion->query($consulta_sql); //función para mandar a hacer la consulta 
//almacenar en una variable que se llame resultado que llame a conexion y denttro de conexion se busque la consulta de persona
$resultado=$conexion->query($consulta_sql);
//variable para almacenar los resultados contarlos, creando un contador 
$count=mysqli_num_rows($resultado);
?>
<!--crear tabla htm-->
<table border="2px">
    <tr>
<th>Numero</th>
<th>Nombre de usuario</th>
<th>Carrera</th>
    </tr>

<?php
//if hay registros? si, mayores a 0?,  
if ($count>0){// le pregunta al contador si hay mas de 0 resultados 
    //entonces listalos con while
    while ($row=mysqli_fetch_assoc($resultado)){ //si  row del resultado se agarra cda encabezado y se va a poder leer al estar dentro d eun while se estara repitiendo hasta que ya no haya registros, mysql_fetch_assoc lo anterior es lo que hace esta funcion pero lo agarrara los datos de resultado
        echo"<tr>";
        echo"<td>".$row['numero']."</td>";
        echo"<td>".$row['nombre_usuario']."</td>";
        echo"<td>".$row['carrera']."</td>";
        echo"</tr>";
    }
}else{
    echo"<h1>Sin registros</h1>";
}
?>