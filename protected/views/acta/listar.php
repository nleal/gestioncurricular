<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>


<h1>Escuelas</h1>
<hr>
<table border='0'>
    <table border="0"><tr><th>Reunion</th> <th>Agenda</th><th>Fecha </th><th>Exportar</th>
    
    <?php foreach ($mode1 as $data) { ?>
    
    <tr><td><?php echo $data->id_acta?></td>	
    <td><?php echo $data->id_agenda?></td>
    <td><?php echo $data->fecha?></td>
    <td><?php  echo CHtml::link('Ver', Yii::app()->request->baseUrl."/uploads/".$data->file,array("target"=>"_blank"))?></td>
        
     
</td>
    
    
    <?php } ?>
</table>
