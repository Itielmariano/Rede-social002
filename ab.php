<?php
 mysql_connect('fdb7.eohost.com','1679510_tfm','1234567i');
 mysql_select_db('1679510_tfm');
?>
 <?php

 $selecionaPosts = mysql_query("SELECT * FROM postagens ORDER BY id DESC LIMIT $inicio, $maximo");
 $contaPosts = @mysql_num_rows($selecionaPosts);
 
 if($contaPosts <= 0){
  echo "<p>Não há nenhuma postagem cadastrada</p>";
 }else{
  while($linhaTb = mysql_fetch_array($selecionaPosts)){
   $idPost = $linhaTb['id'];
   $titulo = $linhaTb['titulo'];
   $conteudo = $linhaTb['conteudo'];
   $foto = $linhaTb['foto'];
   $autor = $linhaTb['autor'];
   $data = $linhaTb['data'];  
?>