<?php include('includes/header.php'); ?>        
        <div id="amarra-center-left">

            <div class="center">
               
                <div class="blocos" id="pagina">
                	<h2><?php echo ($idDaSessao<>$idExtrangeiro) ? 'medalhas de '.$user_fullname : 'Meus medalhas'; ?></h2>
                    <?php include('includes/form_medalhas.php'); ?>
                    
                    <div id="listmedalhas">
                    	<?php
						if($medalhas['num']>0){
							echo '<ul>';
							foreach($medalhas['dados'] as $asmedalhas){
								echo '<li><span><img src="uploads/usuarios/'.user_img($asmedalhas['imagem']).'" /></span>
								<h2><a href="perfil.php?uid='.$asmedalhas['de'].'">'.$asmedalhas['nome'].' '.$asmedalhas['sobrenome'].'</a> - '.date('H:i',strtotime($asmedalhas[10])).'</h2>
								<h3>';

								echo '</ul>';
								echo '</h3>
								
								<!--esta linha de css faz a quebra automatica das linhas
								vindas do formulario white-space:pre-wrap; -->
								
								<pre><p style="white-space:pre-wrap; width:90%;">'.htmlspecialchars($asmedalhas[7]).'</p></pre></li>';
							}
							echo '</ul>';
						}
						?>
                    </div>
                    
                </div><!--blocos-->
                
            </div><!--center-->
            
            <div class="right">
            
                <?php include('includes/amigos.php'); ?>
                                
            </div><!--right-->

                    
        </div><!--amarra-center-left-->
        
<?php include('includes/footer.php'); ?>