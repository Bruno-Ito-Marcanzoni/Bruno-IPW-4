<?php
include '2_trycatch.php';

//$query ="insert into teste (nome, email) values ('Bruno' , 'bruno.marcanzoni@escola.pr.gov.br')";
$query ="update teste set nome= 'Luiz ' where id= 3 ";
$query ="delete from teste where id = 5";
$sql = $conexao->prepare($query);
$resultado = $sql->execute();
?>