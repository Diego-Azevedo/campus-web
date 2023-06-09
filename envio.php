
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RecebeDados</title>
</head>
<body>
<?php
$conexao = mysqli_connect("containers-us-west-132.railway.app","root","kf2HXPBC0ZDBfmUUgNz7","Campuseg");
//CHECAR CONEXAO
if(!$conexao){
echo"NÃO CONECTADO";  
}
echo"CONECTADO AO BANCO>>>>>>";

//RECUPERAR EMAIL
$email = $_POST['email'];
$email = mysqli_real_scape_string($conexao, $email)

//TESTAR SE EMAIL JÁ CONSTA NO BANCO
$sql = "SELECT email FROM Campuseg.Betausers WHERE email = '$email'";
$retorno = mysqli_query($conexao, $sql);

if(mysqli_num_rows($retorno)>0){
echo "EMAIL JÁ CADASTRADO!<br>";  
}else{
$email = $_POST['email'];

//INSERINDO EMAIL NO BANCO
$sql = "INSERT INTO Campuseg.Betausers(email) values('$email')";
$resultado = mysqli_query($conexao, $sql);
echo">>EMAIL CADASTRADO!<br>";
}



?>
</body>
</html>