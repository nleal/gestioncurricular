<?php
$cli = new MiCliente();

 $res_js = json_decode($cli->existePensum(1)); 
 
 
 foreach( $res_js as $it){
					
					echo 'Materiaaaaa: '.$it->nombre_mat.'<br />';
					
					}
 
 ?>

