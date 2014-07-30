<?php include('includes/header.php'); ?>        
        <div id="amarra-center-left">
        
            <div class="center">
               
                <div class="blocos" id="pagina">
                     <div class="topic"><li><h2>Suas Medalhas</h2></li></div><br><br>
                     <img src="http://127.0.0.1/rede-social-dev/medalhas/4.png"><h2><?php echo ($idDaSessao<>$idExtrangeiro) ? 'Sem Medalhas!' : 'Você não tem nenhuma Medalha!'; ?></h2><br><br>
                     <div class="topic"><li><h2>Todas as Medalhas!</h2></li></div>
                     <img class="atualfotogaleria" src="medalhas/medalhas.png" title="Medalhas Normais!" />
                     <img class="topic" src="medalhas/modo1.png" width="400" title="Medalha da Staff!" />
                     <img class="topic" src="medalhas/staff1.png" width="400" title="Medalha do Criador!" />
                     
                </div><!--blocos-->
                
            </div><!--center-->
            
            <div class="right">
            
                <?php include('includes/amigos.php'); ?>
                                
            </div><!--right-->
    
        </div><!--amarra-center-left-->
        
<?php include('includes/footer.php'); ?>