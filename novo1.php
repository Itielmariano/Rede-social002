<?php   
    $conect = mysql_connect('localhost','u835271048_book','1234567i');
	$db = mysql_select_db('u835271048_book');
$page="TFM - Novo";
?>
<a href="noticias.php" title="Voltar!">Voltar! &raquo;</a></div>
<body>
<form action="" method="post" enctype="multipart/form-data">
<font color=black size=5>Titulo:</font><input style='color:#000' size="40" type="text" name="titulo"><br>
<font color=black size=5>Seu Nome:</font><input style='color:#000' size="40" type="text" name="titulo"><br>
<font color=black size=5>Noticia:</font><br><textarea style='color:#000' name="texto" cols=33 rows=20>
</textarea>
<input type="hidden" name="nome" value="TFM">
<input type="hidden" name="secao_id" value="1">
<input type="hidden" name="acao" value="cad" />
<input type="submit"<font face=Arial style='color:#FFFFFF' class='topic'></font>
</form>

<?php
	if(isset($_POST['acao']) && $_POST['acao'] == 'cad'){
		$titulo = $_POST['titulo'];
		$texto = $_POST['texto'];
		
		if(empty($titulo) || empty($texto)){
			echo '<script>alert("Preencha todos os campos!");</script>';
		}else{
			$inserir = mysql_query("INSERT INTO postagens (titulo, texto) VALUES ('$titulo','$texto')");
			echo '<script>alert("Tópico criado com sucesso!");</script>';
		}}
?>
</body>
</html>