<style>

.fonte 
	{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666666;
	}

</style>
<?php

/*********************************************************************
**                                                                  **
**                                                                  **
**                   Wescley Vieira da Costa                        **
**                    wescley@wescley.com.br                        **
**                                                                  **
** Este script é livre para vc usar, alterar e fazer oq quiser,     **
** pode até remover o cabeçalho! Não to nem aí, se é livre é livre! **
**                                                                  **
**                Exibição em gráficos produzido por                **
**                     Jefrey Sobreira Santos                       **
**                     jesobreira@yahoo.com.br                      **
**                                                                  **
*********************************************************************/

// ARRAY COM O CAMINHO PARA OS ARQUIVOS TEXTOS
$arquivo['ruim'] = "ruim.txt";
$arquivo['bom'] = "bom.txt";
$arquivo['otimo'] = "otimo.txt";

// ABRE OS ARQUIVOS PARA LEITURA
$abre_ruim = fopen($arquivo['ruim'], "r");
$abre_bom = fopen($arquivo['bom'], "r");
$abre_otimo = fopen($arquivo['otimo'], "r");

// LÊ OS ARQUIVOS E ARMAZENA O VALOR
$ler_ruim = fread($abre_ruim, filesize($arquivo['ruim']));
$ler_bom = fread($abre_bom, filesize($arquivo['bom']));
$ler_otimo = fread($abre_otimo, filesize($arquivo['otimo']));

// IMPRIME OS VALORES DOS ARQUIVOS
echo "<p><span class=fonte>";
echo "<b>Ruim:</b> ".$ler_ruim."<br>";
echo "<b>Bom:</b> ".$ler_bom."<br>";
echo "<b>Ótimo:</b> ".$ler_otimo;
echo "</span></p>";

//DEFINE O TAMANHO DA COLUNA DO GRÁFICO
//INICIALMENTE decimal.txt É UM ARQUIVO SEM CONTEÚDO
if($ler_ruim == "10"){
$dec = fopen("decimal.txt", "w");
fwrite($dec, "");
fclose($dec);
}
if($ler_bom == "10"){
$dec = fopen("decimal.txt", "w");
fwrite($dec, "");
fclose($dec);
}
if($ler_otimo == "10"){
$dec = fopen("decimal.txt", "w");
fwrite($dec, "");
fclose($dec);
}
//EXIBE OS GRÁFICOS:
?>
Ruim:
<img src="coluna.png" width="<?php include('ruim.txt'); ?><?php include('decimal.txt'); ?>" height="20" alt="<?php include('ruim.txt'); ?>"><br>Bom:
<img src="coluna.png" width="<?php include('bom.txt'); ?><?php include('decimal.txt'); ?>"  height="20" alt="<?php include('bom.txt'); ?>"><br>Ótimo:
<img src="coluna.png" width="<?php include('otimo.txt'); ?><?php include('decimal.txt'); ?>"  height="20" alt="<?php include('otimo.txt'); ?>">
<p>&nbsp;</p>
<p><a href="vota.php">Votar</a></p>