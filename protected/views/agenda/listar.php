<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>


<h1>Escuelas</h1>

<table border='0'>
    <table border="0"><tr><th>Numero de Agenda</th> <th>Fecha de Cierre</th><th>Fecha Crear</th><th>Exportar</th>
    
    <?php foreach ($mode1 as $data) { ?>
    
    <tr><td><?php echo $data->id_agenda?></td>	
    <td><?php echo $data->fecha_cierre?></td>
    <td><?php echo $data->fecha_creacion?></td>
    <td><?php  echo CHtml::link('Ver', Yii::app()->request->baseUrl."/uploads/".$data->file,array("target"=>"_blank"))?></td>
        
     
</td>
    
    
    <?php } ?>
</table>
