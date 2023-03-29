drop schema if exists 'DBweb1';/*Elimina la base de datos si esta existente*/ 
create schema if no exists 'DBweb1' default character set utf8 collate utf8_spanish_ci; /*se crea una base de datos si es que no existe con los caracteres por default de Utf8*/
USE 'DBweb1';/*Se selecciona la base de datos para ser usada*/

--Crear tabla--
create table 
