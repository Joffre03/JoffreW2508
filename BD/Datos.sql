drop schema if exists 'DBweb1';/*Elimina la base de datos si esta existente*/ 
create schema if no exists 'DBweb1' default character set utf8 collate utf8_spanish_ci; /*se crea una base de datos si es que no existe con los caracteres por default de Utf8*/
USE 'DBweb1';/*Se selecciona la base de datos para ser usada*/

--Crear tabla--
create table `persona`(
    `numero` int (5) not null, --se genera la columna numero con una longitud de 5 caracteres y forzozamente se necesita llenar
    `nombre_usuario` text not null,
    `carrera` text not null,
    `no_cuenta` int (10) not null,
    `direccion` text not null,
    `telefono` varchar (8) not null,
    `email` text not null, --puede ser texto o varchar 
    `password` varchar (10)not null, --el varchar se puede modificar el tamaño
    `fecha_registro` datetime not null default current_timestamp, --si no ingresas una fecha manual, agarrara la fecha del ordenador y la pone por default
    `permisos` int (11) not null default '2' -- si no ingresas ningun permiso te dara el 2
--valor por default va en comilla simple '
) engine=Innodo default charset=utf8;
alter table `persona` --seleccionamos tabla a modificar
change column `numero` `numero` int(10) not null auto_increment --nuestra columna numero sera auto incrementable
add primary key(`numero`)