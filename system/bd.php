<?php

$link = mysqli_connect('localhost','root','','yeezy');

if (mysqli_connect_errno())
{
    echo 'Ошибка подключения к бд ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}

?>