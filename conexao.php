<?php
$dbhost ='localhost';
$user='aluno';
$senha='';
$db='aula1505';

$con = new mysqli($dbhost, $user, $senha, $db);
if($con->connect_errno)
{
  echo "erro" ;
}
else
{
   echo"conexao OKAY";
}
?>