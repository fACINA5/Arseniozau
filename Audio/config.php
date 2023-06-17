<?php
$dbHost = 'localhost'
$dbusername = 'root'
$dbpassword = '1234'
$dbname = 'contatos'

$conexao = new msql($dbHost,$dbusername,$dbpassword,$dbname )

if ($conexao ->connect_errno)
{
 echo "erro";   
}
else
{
    echo "conexao bem sucedida"
}
?>