<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>


<h1>Departamento : <?php echo $res_js[0]->nombre  ?> </h1> 
<hr>

<table border='0'>
    <table border="0"><tr><th>Año</th> ><th>Exportar</th>
    
    <?php foreach ($res_js as $data) { ?>
    
    <tr><td><?php echo $data->fecha?></td>	
    <td><?php  echo CHtml::link('Ver', Yii::app()->request->baseUrl."/uploads/".$data->file,array("target"=>"_blank"))?></td>
    
     
     
</td>
    
    
    <?php } ?>
</table>
