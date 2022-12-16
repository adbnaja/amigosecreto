<?

session_start();
//iniciamos a session

//pegamos a variavel via post
$sorteador=$_POST['sorteador'];

//se ela for diferente de vazio:
if(isset($sorteador)){

//pegamos as arrays quardadas na sessao, dos concorrentes e das pessoas sorteadas
$valor_do_sorteio = $_SESSION['valor_do_sorteio'];
$clientes_sorteadores= $_SESSION['clientes_sorteadores'];

//dizemos que diferente = true
$diferente=true;
//em quanto ela for true realizaremos uma seleção aleatoria na array das pessoas sorteadas:
while($diferente==true){
$n_sorteado=array_rand($valor_do_sorteio);
//se a pessoa que esta sorteando e a pessoa que veio com nossa pesquisa randomica e diferente de 0, interompemos o loop dizendo que diferente=false
if ($valor_do_sorteio[$n_sorteado] != $clientes_sorteadores[$sorteador] and $valor_do_sorteio[$n_sorteado] != "0"){
$diferente=false;
//dizemos para pessoa quem é a pessoa sorteada para ele como amigo secreto
echo "".$clientes_sorteadores[$sorteador].", seu amigo secreto é: ".$valor_do_sorteio[$n_sorteado]."";


//removemos a pessoa da lista das pessoas que sortearão e tambem removemos o seu premio/amigo secreto da outra array
//eu tentei usar unset para remover os registros da sessão mas não deu muito certo então decidi substituir pelo caractere 0
//e evita-los quando voltar a pesquisar.
$_SESSION['valor_do_sorteio'][$n_sorteado]="0";
$_SESSION['clientes_sorteadores'][$sorteador]="0";

}
}

}

echo "<br><a href='amigosecreto2.php'>voltar para o sorteio </a>"








?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
