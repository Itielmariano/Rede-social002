<?php
$nick = $_POST['nick'];
$cor = $_POST['cor'];
if($nick == ""){
echo "<script> location.href='index.htm'; </script>";
exit;
}
?>
<html>
<head>
  <title>Bate Papo</title>
</head>
<body bgcolor="#C92E01"><font face="Verdana" size="2" color="#FFFFFF">

 <div><iframe name="chat" src="chat.php" width="100%" height="80%" frameborder="0">Atualize seu navegador.</iframe><br></div><div><iframe name="ultimo" src="ultima.php" frameborder="0" width=300 height=16 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no>Favor atualizar seu navegador.</iframe></div>
<!--FORM DE FALA-->
<hr color="white"><form action="gravar.php" method="post" target="chat">
 <font color="<?php echo $cor ?>"><b><?php echo $nick ?></b></font color="<?php echo $cor ?>">
<input name="nick" type="hidden" value="<?php echo $nick ?>">
<input name="cor" type="hidden" value="<?php echo $cor ?>">
<select name="acao">
<option value="fala" selected>Fala</option>
<option value="grita">Grita</option>
<option value="beija">Beija</option>
<option value="canta">Canta</option>
<option value="pergunta">Pergunta</option>
<option value="concorda">Concorda</option>
<option value="discorda">Discorda</option>
<option value="desculpa-se">Desculpa-se</option>
<option value="surpreende-se">Surpreende-se</option>
<option value="sorri">Sorri</option>
<option value="diverte-se">Diverte-se</option>
<option value="briga">Briga</option>
<option value="dá o fora">Dá o fora</option>
  </select> : <input type="text" name="texto"> <input type="submit" value="Falar">
</form>
<form action="sair.php" method="post">
<input name="nick" type="hidden" value="<?php echo $nick ?>">
<input name="cor" type="hidden" value="<?php echo $cor ?>">
<input type="submit" value="Sair">
</form>
</font>
</body>
</html>