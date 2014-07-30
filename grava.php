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
*********************************************************************/

// RECEBE A VARIÁVEL VOTO
$voto = $_POST['voto'];

// ARRAY COM O CAMINHO PARA OS ARQUIVOS TEXTOS
$arquivo['ruim'] = "ruim.txt";
$arquivo['bom'] = "bom.txt";
$arquivo['otimo'] = "otimo.txt";

// VERIFICA SE A VARIÁVEL VOTO NÃO ESTÁ VAZIA
if (!empty($voto))
	{
	// VERIFICA SE A VARIÁVEL VOTO CONTEM O VALOR "R"
	if ($voto == "R")
		{
		// ABRE O ARQUIVO TEXTO REFERENTE AO VOTO "R" PARA LEITURA
		$abrir = fopen($arquivo['ruim'], "r");
		// LÊ O ARQUIVO REFERENTE AO VOTO "R"
		$ler = fread($abrir, filesize($arquivo['ruim']));
		// ABRE O ARQUIVO PARA GRAVAÇÃO
		$gravar = fopen($arquivo['ruim'], "w");
		// ADICIONA O VALOR 1 AO VALOR JÁ CONTIDO NO ARQUIVO E GRAVA
		$grava = fwrite($gravar, $ler+1);
		}
	// VERIFICA SE A VARIÁVEL VOTO CONTEM O VALOR "B" 	
	else if ($voto == "B")
		{
		// ABRE O ARQUIVO TEXTO REFERENTE AO VOTO "B" PARA LEITURA
		$abrir = fopen($arquivo['bom'], "r");
		// LÊ O ARQUIVO REFERENTE AO VOTO "B"
		$ler = fread($abrir, filesize($arquivo['bom']));
		// ABRE O ARQUIVO PARA GRAVAÇÃO
		$gravar = fopen($arquivo['bom'], "w");
		// ADICIONA O VALOR 1 AO VALOR JÁ CONTIDO NO ARQUIVO E GRAVA
		$grava = fwrite($gravar, $ler+1);
		}
	// VERIFICA SE A VARIÁVEL VOTO CONTEM O VALOR "O"	
	else if ($voto == "O")
		{
		// ABRE O ARQUIVO TEXTO REFERENTE AO VOTO "O" PARA LEITURA
		$abrir = fopen($arquivo['otimo'], "r");
		// LÊ O ARQUIVO REFERENTE AO VOTO "O"
		$ler = fread($abrir, filesize($arquivo['otimo']));
		// ABRE O ARQUIVO PARA GRAVAÇÃO
		$gravar = fopen($arquivo['otimo'], "w");
		// ADICIONA O VALOR 1 AO VALOR JÁ CONTIDO NO ARQUIVO E GRAVA
		$grava = fwrite($gravar, $ler+1);
		}
	// IMPRIME A MENSAGEM DE SUCESSO CASO TUDO OCORRA CORRETAMENTE
	echo "<span class=fonte><br><br>Voto realizado com sucesso!</span>";	
	echo "<a href=resultado.php class=fonte><p>Resultados</p></a>";
	}	
else
	{
	// IMPRIME A MENSAGEM DE ERRO CASO NÃO SEJA SELECIONADA NENHUMA DAS OPÇÕES
	echo "<span class=fonte>Nenhuma opção foi selecionada!</span>";
	}		
?>
<p>&nbsp;</p>
<p><strong class="fonte" onClick="window.close()" style="cursor:hand">Fechar</strong></p>
