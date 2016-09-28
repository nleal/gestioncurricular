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

<p class="note">Los campos con  <span class="required">*</span> son obligatorios</p>






<script>

		$(document).ready(function(){
	
		$('#depart').val('2');
		
	    $("select[name=depart]").change(function(){
		   
		   id_departamento = $('select[name=depart]').val();
		   
		   $.ajax({
	       //url: "mostrarmatriz",
	       url: <?php echo "'".CController::createUrl('programa/materiaselecionar')."'"; ?>,
               
	       type: "POST",
	       data: {'id_departamento' : $('select[name=depart]').val()},
	       dataType: 'json',
	       success: function(data){
			   $("#mostrar_matriz").html(data.message);
	       },
	       error: function(data){
			   console.log(data);
			   alert('ERROOOOOOOOOOOOOOOOOOOOOOOOOOOOOOR');
			   },
	        });
	    });
	    
	    $('#depart').trigger('change');	
	    
	});
	</script>



	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php	$this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
						'model'=>$model,
						'attribute'=>'fecha',
						'language'=>'es',
						'options'=>array(
								'dateFormat'=>'yy-mm-dd',
								'constrainInput'=>'false',
								'duration'=>'fast',
								'showAnim'=>'show',
								'minDate'=>date("Y-m-d"),
								'changeMonth'=>true,
								'changeYear'=>true,
								'yearRange'=>'1900:2099',
								'minDate' => '1900-01-01',      
								'maxDate' => '2099-12-31',
						),
					)
				);
		?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estatus'); ?>
		<?php echo $form->dropDownList($model, 'status', CHtml::listData( Status::model()->findAll(), 'id_status', 'nombre')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>



<?php $model1=Departamento::model()->findAll(); ?>

<div class="row">
	<?php echo $form->labelEx($model,'Departamento'); ?>
<select name="depart" id="depart">
	
<?php foreach($model1 as $data): ?>
	
    <option value="<?php echo $data->id_departamento?>"><?php echo $data->nombre?></option>
<?php endforeach; ?>
 </select>	
<div>


  <div class="row">
	  <?php $departamentoListData = CHtml::listData(Departamento::model()->findAll(), 'id_departamento', 'nombre');?>
	  <?php $model1=Departamento::model()->findAll();
	  
	  /*foreach( $model1 as $model1_1){
			echo $model1_1['id_departamento'];
		  }
	  */
	  ?>
	  
	  
        <?php //echo $form->labelEx($model1, $model1['id_departamento']); ?>
        <?php
       /* echo $form->dropDownList($model1, 'id_departamento', $departamentoListData, array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>$this->createUrl('materiaselecionar'),
                'update'=>'#' . CHtml::activeId($model, 'id_materia')
            ), 'prompt'=>'-- Selecciona Departamento --'
        ));*/
        ?>

   </div>

<div class="row">
	
	<?php echo $form->labelEx($model,'Asignatura'); ?>
<div id = 'mostrar_matriz' name = 'mostrar_matriz'></div>
</div>


      <div class="row">
                <?php //echo $form->labelEx($model,'id_materia'); ?>
        <?php //echo $form->dropDownList($model,'id_materia',array(
        //'prompt' => 'Seleccione un Materia...'
        //)
        //); ?>
        <?php //echo $form->error($model,'id_materia'); ?>
        </div>




	<div class="row">
		<?php echo $form->labelEx($model,'Archivo'); ?>
		 <?php echo $form->fileField($model,'file'); ?>
		<?php echo $form->error($model, 'file');
    $infoFieldFile = (end($form->attributes)); ?>
	</div>


	<div class="row buttons buttonSave">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
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
