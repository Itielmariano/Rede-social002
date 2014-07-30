<?php include('includes/header.php'); ?>        
        <div id="amarra-center-left">
<?
?>
<?
echo "<font face=verdana size=1>";
include "config.php";

$sql = mysql_query("SELECT * FROM $tb1 ORDER BY id DESC");
$linhas = mysql_num_rows($sql);
if (!$sql){
echo "Nao foi possivel fazer a consulta";
}
else {
while($reg = mysql_fetch_array($sql)){
$titulo = $reg['titulo'];
$data = $reg['data'];
$hora = $reg['hora'];
$msg = $reg['msg'];
?>
            <div class="center">
<div class="blocos" id="pagina">
<div class="topicc"><h2><?php echo $titulo; ?></h2><br>
<?php echo $msg; ?><br><br>
Postado dia <b><?php echo $data; ?></b></div>
</div>
<?php }} ?>
</div>

            </div><!--amarra-center-left-->
