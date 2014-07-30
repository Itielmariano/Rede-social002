<?php include('includes/header.php'); ?>        
        <div id="amarra-center-left">
        
            <div class="center">
               
                <div class="blocos" id="dexar-recados">
                    <div class="topic"><h2><?php echo ($idDaSessao<>$idExtrangeiro) ? $user_fullname : $user_fullname; ?>
                    <span>
                    <?php 
					if($idDaSessao<>$idExtrangeiro){	
						
						$solicitacao = Amisade::solicitacao($idDaSessao,$idExtrangeiro);
						
						$link = '<a href="php/amisade.php?ac=';		
						
						if($solicitacao['r']==0){
							echo $link.'convite|'.$idDaSessao.'|'.$idExtrangeiro.'">Adicionar amigo</a>';
						}elseif($solicitacao['r']==1){
							echo $link.'remover|'.$idDaSessao.'|'.$idExtrangeiro.'|'.$solicitacao['id'].'">Cancelar pedido</a>';
						}elseif($solicitacao['r']==2){
							echo $link.'remover|'.$idDaSessao.'|'.$idExtrangeiro.'|'.$solicitacao['id'].'">Remover amigo</a>';
						}
					}
					?>
                                        
                    </span></h2></div>
                    
                    
                </div><!--blocos-->

                <div class="blocos" id="pagina">
                	<div class="topic"><h2>Perfil</h2></div><br><br>
                	<h3>Data de Nascimento:</h3> <h2><?php echo $user_nascimento; ?></h2>
                    <h2>Ano/Mês/Dia</h2><br><br>
                	<h3>Sexo:</h3> <h2><?php echo $user_sexo; ?></h2><br><br>
                	<h3>Interessado em:</h3> <h2><?php echo $user_interessado; ?></h2><br><br>
                    
                    
                    <?php
					if(isset($_GET['perfil']) AND $_GET['perfil']=='UPLOAD'){
						
						?>
                        <div class="topic"><form name="upload-foto-perfil" enctype="multipart/form-data" method="post" action="php/crop.php">
                        	<input type="file" name="foto-perfil" />
                            <input type="submit" value="Recortar" />
                            <input type="hidden" name="imgantiga" value="<?php echo $user_imagem ?>" />
                            <input type="hidden" name="upload" value="perfil" />
                            <input type="hidden" name="uid" value="<?php echo $idDaSessao ?>"/>
                        </form></div>
                        <?php
						
					}
					?>
                    
                </div><!--blocos-->
                
            </div><!--center-->
            
            <div class="right">
            
                <?php include('includes/amigos.php'); ?>
                                
            </div><!--right-->

                    
        </div><!--amarra-center-left-->
        
<?php include('includes/footer.php'); ?>