<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>


<h1>Escuelas</h1>

<table border='0'>
    <table border="0"><tr><th>#</th> <th>Departamentos</th><th>Exportar</th><th>Viejos</th>
    
    <?php foreach ($res_js as $data) { ?>
    
    <tr><td><?php echo $data->id_departamento?></td>	
    <td><?php echo $data->nombre?></td>
    <td><?php  echo CHtml::link('Ver', Yii::app()->request->baseUrl."/uploads/".$data->file,array("target"=>"_blank"))?></td>
    <td><?php echo CHtml::link(
                'Ver',
                Yii::app()->createUrl('pensumhistorico/inactivos', array('id_departamento'=>$data->id_departamento))
        )?></td> 
     
     
</td>
    
    
    <?php } ?>
</table>
