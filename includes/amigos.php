<div class="blocos" id="publicidade">
    <img src="midias/banner.gif" />
</div><!--blocos-->

<div class="blocos" id="meus-amigos">

    <span>Meus amigos(<?php echo $list_amigos['num'] ?>) <a href="#">Todos</a></span>
    
    <ul>
    	<?php
		if($list_amigos['num']>0){
			foreach($list_amigos['dados'] as $resAmigos){
				echo '<li><span><a href="perfil.php?uid='.$resAmigos[0].'"><img src="uploads/usuarios/'.user_img($resAmigos[3]).'" alt="" title="'.$resAmigos[1].' '.$resAmigos[2].'" /></a></span></li>';
			}
		}else{
			echo 'Você não tem amigos';
		}
		?>
    </ul>
</div><!--blocos-->