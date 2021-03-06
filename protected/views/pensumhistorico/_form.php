	<?php
	/* @var $this PensumhistoricoController */
	/* @var $model Pensumhistorico */
	/* @var $form CActiveForm */
	?>
	
	<script>
			$(document).ready(function() {
				//alert(<?php echo "'".$model->isNewRecord."'" ;?>);
	        
	        var inew = $('input[name="isNewR"]').val();
	        $('#submitbutton').click(function(ev) {
	            ev.preventDefault();
	            //var inew = $("#isNewR").val();
	            
	            //if(inew==1){
	            $.ajax({ 
				url: <?php echo "'".CController::createUrl('pensumhistorico/cosa')."'"; ?>,               
				type: "GET",
				data: {'id_departamento' : $('select[id=Pensumhistorico_id_departamento]').val(),"id_status": $('select[id=Pensumhistorico_status]').val()},
				dataType: 'json',
	                success:function(data){
						//alert(data.message);
						   if(data.message==1){			
							if (confirm("¿El departamento tiene pensum vigente, desea actualizarlo?")) {
									//$('#nataly').val(1);
								$.ajax({ 
								url: <?php echo "'".CController::createUrl('pensumhistorico/cosa2')."'"; ?>,               
								type: "POST",
								data: {'id_departamento' : $('select[id=Pensumhistorico_id_departamento]').val()},
								dataType: 'json',
									success:function(data){
										if(data.message==1){
											$('#pensumhistorico-form').submit();
										}else{
											alert("ERROR");
											}
									},
									error: function() {
										alert("ERROR");
									},
								});								
							}
						   }else{
							   //No hay vigente voy a guardar
							   $('#pensumhistorico-form').submit();
						}                
					},
	                error: function() {
	                    alert("Error!");
	                },
	            });
			/*}else{
				alert("Vamos a actualizar");		 
				}*/
	        });
	    });
	</script>
	
	
	<div class="form">
	
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'pensumhistorico-form',
		'enableClientValidation' => true,
		'clientOptions' => array(
	    'validateOnSubmit' => true,         ),
	    'htmlOptions' => array('enctype' => 'multipart/form-data'),
		'enableAjaxValidation'=>false,
		
	)); ?>
	
		<p class="note">Los campos con  <span class="required">*</span> son obligatorios</p>
	
		<?php echo $form->errorSummary($model); ?>
	
		<div class="row">
			<?php echo $form->labelEx($model,'Departamento'); ?>
			<?php echo $form->dropDownList($model, 'id_departamento', CHtml::listData( Departamento::model()->findAll(), 'id_departamento', 'nombre'),array('empty'=>'Seleccione...', 'id_departamento'=>'id_departamento')); ?>
			<?php echo $form->error($model,'id_departamento'); ?>
			
		</div>
	
	
		<div class="row">
			<?php echo $form->labelEx($model,'Fecha'); ?>
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
	
		
		<div class="row">
			<?php if(!$model->isNewRecord && $model->file!="" && strlen($model->file)!=0){ 
			echo $form->labelEx($model,'Documento');
			echo CHtml::link($model->file, Yii::app()->request->baseUrl."/uploads/".$model->file,array("target"=>"_blank")); 
			}?>		
		</div>
		
		<div class="row">
		</div>	
		
		<div class="row">
		<?php echo $form->labelEx($model,'Archivo'); ?>
	    <?php echo $form->fileField($model,'file'); ?>
	    <?php echo $form->error($model, 'file');
	    $infoFieldFile = (end($form->attributes)); ?>
		</div>
		
		<div class="row">
		<input type="hidden" name="isNewR" value="<?php echo $model->isNewRecord; ?>">
	    </div>
		
		<div class="row buttons buttonSave">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Salvar',array('id' => 'submitbutton')); ?>
		</div>
	
	<?php $this->endWidget(); ?>
	
	</div><!-- form -->
	<script type="text/javascript">
	    function emptyfields()
	    {
	        console.log("Entre");
	    }
	    </script>
	
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
	
	
