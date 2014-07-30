<div id="dexar-recado">

	<script type="text/javascript">
	$(function(){
		$('#medalhainput').click(function(){
			$(this).fadeOut();
			$('#contentformmedalha').fadeIn();
			$('#contentformmedalha textarea').focus();
		});
		$('#cancelarformmedalha').click(function(){
			$('#medalhainput').fadeIn();
			$('#contentformmedalha').fadeOut();
		});
	});
	</script>

    <?php $txt_for_medalha = ($idDaSessao<>$idExtrangeiro) ? 'Deixe um medalha para '.$user_fullname : 'Deixe um medalha para seus amigos' ; 
	
	if(isset($_POST['postarmedalha'])){
		
		$_POST['medalhaamigos'] = isset($_POST['medalhaamigos']) ? $_POST['medalhaamigos'] : '';
		
		if($_POST['medalhapara']=='selecionar' AND $_POST['medalhaamigos']<>''){
			$para = $_POST['medalhaamigos'];
		}else{
			$para = (!isset($_POST['medalhapara'])) ? $idExtrangeiro : $_POST['medalhapara'];
		}

		if($_POST['txtmedalha']<>''){
			medalhas::setmedalha($idDaSessao,$para,$_POST['txtmedalha']);
			
			$location = ($idExtrangeiro<>$idDaSessao) ? 'topicmedalhas.php'.$idExtrangeiro : './';
			
			header('Location: '.$location);
			exit();
		}
	}
	
	?>
    
    <div id="medalhainput"><?php echo  $txt_for_medalha; ?></div>
    
    <div id="contentformmedalha">
    	<form name="dexar-recado" action="" method="post" enctype="multipart/form-data">
            
            <textarea name="txtrecado" id="txtrecado"></textarea>
            <input type="submit" value="postar" id="postarmedalha" name="postarmedalha" />  <a id="cancelarformmedalha" href="javascript:void(0);">cancelar</a>
        </form>
    </div>
    
    
    
    
    
</div><!--blocos-->