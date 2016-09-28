<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>


<h1>Consultar Actas</h1>
<hr>
<table border='0'>
    <table border="0"><tr><th>Reunión</th> <th>Agenda</th><th>Fecha </th><th>Lugar </th><th>Exportar</th>
    
    <?php foreach ($mode1 as $data) { ?>
    
    <tr><td><?php echo $data->id_acta?></td>	
    <td><?php echo Agenda::Model()->FindByPk($data->id_agenda)->num_agenda?></td>
    <td><?php echo $data->fecha?></td>
    <td><?php echo $data->lugar?></td>
    <td><?php  echo CHtml::link('Ver', Yii::app()->request->baseUrl."/uploads/".$data->file,array("target"=>"_blank"))?></td>
        
     
</td>
    
    
    <?php } ?>
</table>
