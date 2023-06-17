<!DOCTYPE html>
<html>
  
<head>
    <meta charset ="UTF-8">
</head>
<title>receber dados </title>
<body>

<?php
$conexao = mysqli_connect("localhost","root","1234","base1");

// verificar conexão
if(!$conexao){
    echo "não conectou";
}
echo"conectado ao banco !!!!!";

///verificar se já existe
$email = $_POST['email'];
$email = mysqli_real_escape_string($conexao,$email);
$sql = "SELECT email FROM contatos.usuários WHERE email='$email'";
$retorno = mysqli_query($conexao,$sql);
if(mysqli_num_row($retorno)>0);{
echo"esgotou o seu numero de opinões diarias";
}else{

$nome = $_POST['nome'];
$email = $_POST ['email'];
$mensagem = $_POST ['mensagem'];

$mensagem = $_POST ['mensagem'];
$sql = "INSERT INTO contatos.usuários(nome,email,mensagem) values('$nome','$email','$mensagem')";
$resultado = mysqli_query($conexao,$sql);

echo"Opinião enviada com sucesso";
echo" <a href='file:///C:/Users/PC/Desktop/Arreiou/Audio/contactenos.html'>Voltar</a>";
}

?>
</body>
</html>
