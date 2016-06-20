<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
	
	$this->menu=array(
	array('label'=>'List Pensumhistorico', 'url'=>array('index')),
	array('label'=>'Manage Pensumhistorico', 'url'=>array('admin')),
);
	
?>


<h1>Departamentos</h1>


    <table><tr> <th>Departamentos</th><th>Actual</th><th>Historico</th>
    
    <?php foreach ($res_js as $data) { ?>
    
    <tr>	
    <td><?php echo $data->nombre?></td>
    <td align=right><?php  echo CHtml::link('<img  width=20px height=20px src=/gestioncurricular/themes/tgr/images/pdf.gif />', Yii::app()->request->baseUrl."/uploads/".$data->file,array("target"=>"_blank"))?></td>
    <td><?php echo CHtml::link(
                '<img  width=20px height=20px src=/gestioncurricular/themes/tgr/images/fleh.png />',
                Yii::app()->createUrl('pensumhistorico/inactivos', array('id_departamento'=>$data->id_departamento))
        )?></td> 
     
     
</td>
    
    
    <?php } ?>
</table>
