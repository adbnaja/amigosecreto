<?
//iremos criar um simples sistema de amigo secreto
//não preciso dizer que o numero de pessoas tem que ser par




session_start();
//iniciamos a sessão


$valor_do_sorteio = array("guilherme", "leoberto", "andrei", "jose", "rafael", "bruno", "fabiana", "juan");
//lista de pessoas/premios
$clientes_sorteadores = array("guilherme", "leoberto", "andrei", "jose", "rafael", "bruno", "fabiana", "juan");
//lista de pessoas que irão sortear 

//eles serão iguais claro

//escreveramos as arrays na nossa session
$_SESSION['valor_do_sorteio'] = $valor_do_sorteio;
$_SESSION['clientes_sorteadores'] = $clientes_sorteadores;

//imprimimos o link para o sorteio
echo "<a href='amigosecreto2.php' > começar sorteio</a>";















/*$lista = array("um" => "Cassi", "dois" => "Leo", "tres" => "Adinan", "quatro" => "João", "cinco" => "Kael", "seis" => "Ana Mélia", "sete" => "Bruna", "oito" =>"andressa");*/


/*while (list($chave,$valor) = each ($lista) )
{         
		
		
		echo "$chave = $lista<br>";
}

*/
////////////////////////////////////////
/*$_SESSION['array'] = $lista;

foreach($_SESSION['array'] as $key=>$value)
    {
    // and print out the values
    echo "".$key."=".$value."<br />";
    }*/


?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?






//$valor = array_rand($array);
//echo $array[$valor];





/*
echo "a divisão sera entre 37 por 15<br>";
$numerod = 37/15;

echo "o valor da divisão é :";
echo $numerod;
echo "<br>";



$cima= ceil($numerod) -$numerod;
$baixo = floor($numerod) -$numerod;
//$intval = intval($numerod);
echo "para baixo: $baixo<br> para cima: $cima<br>";

if($cima > $baixo){$totaldepgs=ceil($numerod);}
else{$totaldepgs=floor($numerod);}

echo $totaldepgs;

*/
?>


</body>
</html>
