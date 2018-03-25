<?php
 
// подключаемся к серверу
$link = mysql_connect("localhost", "root", "") 
    or die("Ошибка " . mysql_error($link));
    mysql_select_db('diplom1', $link);
 
// выполняем операции с базой данных

?>
