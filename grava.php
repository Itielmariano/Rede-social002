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
** Este script � livre para vc usar, alterar e fazer oq quiser,     **
** pode at� remover o cabe�alho! N�o to nem a�, se � livre � livre! **
**                                                                  **
*********************************************************************/

// RECEBE A VARI�VEL VOTO
$voto = $_POST['voto'];

// ARRAY COM O CAMINHO PARA OS ARQUIVOS TEXTOS
$arquivo['ruim'] = "ruim.txt";
$arquivo['bom'] = "bom.txt";
$arquivo['otimo'] = "otimo.txt";

// VERIFICA SE A VARI�VEL VOTO N�O EST� VAZIA
if (!empty($voto))
	{
	// VERIFICA SE A VARI�VEL VOTO CONTEM O VALOR "R"
	if ($voto == "R")
		{
		// ABRE O ARQUIVO TEXTO REFERENTE AO VOTO "R" PARA LEITURA
		$abrir = fopen($arquivo['ruim'], "r");
		// L� O ARQUIVO REFERENTE AO VOTO "R"
		$ler = fread($abrir, filesize($arquivo['ruim']));
		// ABRE O ARQUIVO PARA GRAVA��O
		$gravar = fopen($arquivo['ruim'], "w");
		// ADICIONA O VALOR 1 AO VALOR J� CONTIDO NO ARQUIVO E GRAVA
		$grava = fwrite($gravar, $ler+1);
		}
	// VERIFICA SE A VARI�VEL VOTO CONTEM O VALOR "B" 	
	else if ($voto == "B")
		{
		// ABRE O ARQUIVO TEXTO REFERENTE AO VOTO "B" PARA LEITURA
		$abrir = fopen($arquivo['bom'], "r");
		// L� O ARQUIVO REFERENTE AO VOTO "B"
		$ler = fread($abrir, filesize($arquivo['bom']));
		// ABRE O ARQUIVO PARA GRAVA��O
		$gravar = fopen($arquivo['bom'], "w");
		// ADICIONA O VALOR 1 AO VALOR J� CONTIDO NO ARQUIVO E GRAVA
		$grava = fwrite($gravar, $ler+1);
		}
	// VERIFICA SE A VARI�VEL VOTO CONTEM O VALOR "O"	
	else if ($voto == "O")
		{
		// ABRE O ARQUIVO TEXTO REFERENTE AO VOTO "O" PARA LEITURA
		$abrir = fopen($arquivo['otimo'], "r");
		// L� O ARQUIVO REFERENTE AO VOTO "O"
		$ler = fread($abrir, filesize($arquivo['otimo']));
		// ABRE O ARQUIVO PARA GRAVA��O
		$gravar = fopen($arquivo['otimo'], "w");
		// ADICIONA O VALOR 1 AO VALOR J� CONTIDO NO ARQUIVO E GRAVA
		$grava = fwrite($gravar, $ler+1);
		}
	// IMPRIME A MENSAGEM DE SUCESSO CASO TUDO OCORRA CORRETAMENTE
	echo "<span class=fonte><br><br>Voto realizado com sucesso!</span>";	
	echo "<a href=resultado.php class=fonte><p>Resultados</p></a>";
	}	
else
	{
	// IMPRIME A MENSAGEM DE ERRO CASO N�O SEJA SELECIONADA NENHUMA DAS OP��ES
	echo "<span class=fonte>Nenhuma op��o foi selecionada!</span>";
	}		
?>
<p>&nbsp;</p>
<p><strong class="fonte" onClick="window.close()" style="cursor:hand">Fechar</strong></p>
