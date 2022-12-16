<?

session_start();
// iniciamos a sessão


//aqui pegamos os nomes de todos as pessoas que irão sortear um amigo secreto
$clientes_sorteadores= $_SESSION['clientes_sorteadores'];




?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="amigosecreto3.php" method="post" enctype="multipart/form-data" name="form1" target="_self" id="form1">
  <label>
  Diga quem é você:<br />
  <select name="sorteador" size="1" id="sorteador">
    <option>-----</option>
    <? 
	
	//aqui imprimimos todos as pessoas que irão sortear um amigo secreto, 
	//você diz quem é e vamos ao sorteio
	$i=0;
	
	while($i<count($clientes_sorteadores)){
	if($clientes_sorteadores[$i] != "0"){
    echo "<option value=".$i.">".$clientes_sorteadores[$i]."</option>";}
	$i++;
	}?>
  </select>
  </label>
  <label>
  <input type="submit" name="button" id="button" value="Sortear" />
  </label>
</form>





</body>
</html>
