<?php
/* @var $this ProgramaController */
/* @var $model Programa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'programa-form',
		'enableClientValidation' => true,
	'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model, 'status', CHtml::listData( Status::model()->findAll(), 'id_status', 'nombre')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>



<?php $model_deps=Departamento::model()->findAll(); 
			foreach($model_deps as $model_dep){
echo '				
<fieldset>
    <legend><b>'.$model_dep->nombre.'</b> <a href="#" id="show" onclick="mostrar('.$model_dep->id_departamento.')">+</a></legend>';


$Criteria = new CDbCriteria();
$Criteria->addCondition("id_departamento =".$model_dep->id_departamento);
$model_mats=Materia::model()->findAll($Criteria);


echo '<div id="element_'.$model_dep->id_departamento.'" style="display: none;" >
		<div id="close">
			<a href="#" id="hide" onclick="oculta('.$model_dep->id_departamento.')">cerrar</a>
		</div>
	  <table>';
		
$num_td = 0;
/*
 * ATENCION 
 * Como hacer para que elija solo un chek box????????????????????????????
 * 
 * 
 * 
 * 
 * */

foreach($model_mats as $model_mat){
		
		if($num_td==0){
			echo '<tr>';
			}
			
		if($num_td<4){
			echo '<td><input type="checkbox" name="CB[]'.$model_mat->id_materia.'" value="'.$model_mat->id_materia.'">'.$model_mat->nombre_mat.'</input></td>';
			$num_td++;
		}else{
			$num_td=0;
			echo '</tr>';
		}
		
		
		//echo $form->checkBox($model,'id_materia', array('value'=>$model_mat->id_materia,'checked'=>'checked'));
		
	}
	echo '</table>';
  echo '</fieldset> ';						
}
?>




	<div class="row">
		<?php echo $form->labelEx($model,'Archivo'); ?>
		 <?php echo $form->fileField($model,'file'); ?>
		<?php echo $form->error($model, 'file');
    $infoFieldFile = (end($form->attributes)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>
    function customValidateFile(messages){
        var nameC= '#<?php echo $infoFieldFile['inputID']; ?>';
		alert(nameC);
 
        var control = $(nameC).get(0);
 
        //simulates the required validator and allowEmpty setting of the file validator
        if (control.files.length==0) {
            messages.push("File is required");
            return false;
        }
 
        file = control.files[0];
 
        //simulates the types setting of the file validator
        if (file.name.substr((file.name.lastIndexOf('.') +1)) !='pdf') {
            messages.push("This is not a pdf file");
            return false;
        }
 
       //simulates the maxSize setting of the file validator
        if (file.size>1000000) {
            messages.push("File cannot be too large (size cannot exceed 1.000.000 bytes.)");
            return false;
        }
 
       //simulates the minSize setting of the file validator
        if (file.size<100) {
            messages.push("File cannot be too small (size cannot be smaller 100 bytes.)");
            return false;
        }
 
       //simulates the format type (extra checking) see also http://en.wikipedia.org/wiki/Internet_media_type
 /*
        if (file.type!="pdf") {
            messages.push("This is not a valid file");
            return false;
        }*/
 
    }
 
</script>


<script type="text/javascript">
function mostrar(elemento) {
    $("#element_"+elemento).show();
}

function oculta(elemento) {
    $("#element_"+elemento).hide(); 
}
</script>
