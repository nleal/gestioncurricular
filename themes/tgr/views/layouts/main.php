<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
	
	<!--[if IE 6]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/script.js"></script>
      <style type="text/css">
	.art-post .layout-item-0 { padding-right: 10px;padding-left: 10px; }
   .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
   .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
   </style>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="art-page-background-middle-texture">
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
<div class="art-bar art-nav">
<div class="art-nav-outer">
	
		<?php $this->widget('zii.widgets.CMenu',array(
		'id'=>'art-hmenu',	
                'items'=>array(
                                array('label'=>'Inicio', 'url'=>array('/site/index')),
                                array('label'=>'Pensum', 'url'=>array('/departamento/computacion')),
                                array('label'=>'Programa', 'url'=>array('/materia/create')),
                                array('label'=>'Historico', 'url'=>array('/materia/lista_materia')),           
                                /*array('label'=>'Departamento', 'url'=>array('/departamento/index'),
                                        'items'=>array(
                                        array('label'=>'Biología', 'url'=>array('/departamento/biologia')),
                                        array('label'=>'Computación', 'url'=>array('/departamento/computacion')),
                                        array('label'=>'Física', 'url'=>array('/departamento/fisica')),
                                        array('label'=>'Matemáticas', 'url'=>array('/departamento/matematica')),
                                        array('label'=>'Química', 'url'=>array('/departamento/quimica')),
                                        
                                        ),
                                    ),*/
                                array('label'=>'Reporte pensum', 'url'=>array('/departamento/pensum')),  
                                array('label'=>'Mantenimineto', 'url'=>array('/departamento/index'),
                                        'items'=>array(
                                        array('label'=>'Departamentos', 'url'=>array('/departamento/index')),
                                        array('label'=>'Materias', 'url'=>array('/materia/index')),
                                        array('label'=>'Objetivos', 'url'=>array('/objetivo/index')),
                                        array('label'=>'Temas', 'url'=>array('/tema/index')),   
                                        array('label'=>'Pensum', 'url'=>array('/pensum/index')),                   
                                        array('label'=>'Gestion Curricular', 'url'=>array('/acta/index'),
											'items'=>array(
											array('label'=>'Actas', 'url'=>array('/acta/index')),
											array('label'=>'Agenda', 'url'=>array('/agenda/index')),
											array('label'=>'Puntos', 'url'=>array('/punto/index')),
											array('label'=>'Resolucion', 'url'=>array('/resolucion/index')),

											
                                        ),),    
                                        ),
                                    ),         
								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			
			'htmlOptions' => array( 'class' => 'art-hmenu' )  
		)); ?>
            	
	
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-header">
                <div class="art-headerobject">
                
                <img alt="" width="130px" height="145px" src="/gc/themes/tgr/images/uc.png" style="float: left;" />
                
                </div>
                        <div class="art-logo">
                                                 <h1 class="art-logo-name"><a href="http://localhost/gc/index.php/">SISTEMA DE GESTION CURRICULAR</a></h1>
                                                                         <h2 class="art-logo-text"> FACYT</h2>
                                                </div>
                
                
                <div class="art-headerobject2">
                
                <img alt="" width="140px" height="155px" src="/gc/themes/tgr/images/facytp.png" style="float: rigth;" />
                
                </div>
                
                
            </div>
            <div class="cleared reset-box"></div>
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
<div class="art-box art-post">
    <div class="art-box-body art-post-body">
<div class="art-post-inner art-article">
                                <div class="art-postcontent">
<div class="art-content-layout">
    <div class="art-content-layout-row">
  
    
    <?php if(Yii::app()->controller->action->id=='index'){ 
		echo ' <div class="art-layout-cell layout-item-0" style="width: 40%;">';
        echo ' <p><img alt="" width="217" height="145" src="/gc/themes/tgr/images/shutterstock_46799410.jpg" style="float: left;" /></p>';
        echo '</div>';
		}
			?>
       
       
       <?php 
       
       $cli = new MiCliente();
     //  echo "".$cli->obtenerMensajeRemoto('BIENVENIDOS'); 
       ?>
       
       <?php echo $content; ?>
       
    </div>
</div>
<div class="art-content-layout">
    <!--<div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 40%;">
        <p><img alt="" width="216" height="144" src="/gc/themes/tgr/images/shutterstock_19883491.jpg" style="float: left;" /><br /></p>
    </div><div class="art-layout-cell layout-item-0" style="width: 60%;">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet congue vulputate, nisi erat iaculis nibh, vitae feugiat sapien ante eget mauris. Cras elit nisl, rhoncus nec iaculis ultricies, feugiat.</p>
        
        <p>Pellentesque ac felis tellus. Aenean sollicitudin imperdiet arcu, vitae dignissim est posuere id. Duis placerat justo eu nunc interdum ultrices. Phasellus elit dolor, porttitor id consectetur sit amet. Fusce ornare elit nisl, feugiat bibendum lorem.</p>
    </div>
    </div>-->
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
  <!--  <div class="art-layout-cell layout-item-0" style="width: 60%;">
        <h3>News</h3>
        
        <ul>
            <li>
                <p><span style="font-weight: bold;">Product Is Now Available</span><br />
                <span style="font-style: italic;">November 17, 2010</span></p><br />
        
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet congue vulputate, nisi erat iaculis nibh, vitae feugiat sapien ante eget mauris.</p><br />
            </li>
        
            <li>
                <p><span style="font-weight: bold;">Website Launched</span><br />
                <span style="font-style: italic;">October 11, 2010</span></p><br />
        
                <p>In fringilla pharetra purus, semper vulputate ligula cursus in. Donec at nunc nec dui laoreet porta eu eu ipsum. Sed eget lacus sit amet risus elementum dictum. Etiam pharetra, tellus sit amet congue vulputate.</p>
            </li>
        </ul>
    </div><div class="art-layout-cell layout-item-1" style="width: 40%;">
        <h3>Why Us</h3>
        
        <p><span style="font-weight: bold;">Raising The Standards</span></p>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet congue vulputate, nisi erat iaculis nibh, vitae feugiat.</p>
        
        <p><span style="font-style: italic;">Sarah White - ProWeb, Inc.</span></p>
        
        <p><span style="font-weight: bold;">Steps For The Future</span></p>
        
        <p>Pellentesque sit amet imperdiet nunc. Aenean tellus mi, adipiscing sit amet laoreet eget, lobortis quis nisl.</p>
        
        <p><span style="font-style: italic;">John Black - Internet &amp; Co.</span></p>
    </div>-->
    </div>
</div>

                </div>
                <div class="cleared"></div>
</div>

		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                        <div class="art-layout-cell art-sidebar1">


<?php if (Yii::app()->user->isGuest){ ?>

<div class="art-box art-vmenublock">
    <div class="art-box-body art-vmenublock-body">
                <div class="art-box art-vmenublockcontent">
                    <div class="art-box-body art-vmenublockcontent-body">



<?php 			
		$model = new LoginForm();
?>
               
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

                
                
                
               	
                    </div>
                </div>
	<div class="cleared"></div>
 </div>



<?php
}else{


echo '<div class="art-box art-vmenublock">
    <div class="art-box-body art-vmenublock-body">
                <div class="art-box art-vmenublockcontent">
                    <div class="art-box-body art-vmenublockcontent-body">
                <ul class="art-vmenu">
	<li>
		<a href="./main.html" class="active">Main</a>
	</li>		
</ul>
                
               		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>';
    
    
}



?>
      
</div>
<div class="art-box art-block">
    <!--<div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                    <h3 class="t">Featured Products</h3>
                </div>
                <div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">
                <p>Wireless Phone: <span style="font-weight: bold;"><span style="color: rgb(158, 10, 13);">$29.99</span></span>/mo<br />
<br /></p>

<p>Satelite Phone: <span style="font-weight: bold;"><span style="color: rgb(158, 10, 13);">$299.99</span></span>/mo<br />
<br /></p>

<p>Landline Phone:<br />
<span style="font-weight: bold;"><span style="color: rgb(158, 10, 13);">$14.95</span></span>/mo<br />
<br /></p>

<p>Phone Cards:<br />
<span style="font-weight: bold;"><span style="color: rgb(158, 10, 13);">From $1.45</span><br />
<br /></span></p>

<p><a href="./products.html">More...</a></p>                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>-->
</div>

                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="art-footer">
        <div class="art-footer-body">
            <div class="art-footer-center">
                <div class="art-footer-wrapper">
                    <div class="art-footer-text">
						    <p class="art-page-footer"><a href="http://www.uc.edu.ve/" target="_blank">UC</a> | <a href="http://www.facyt.uc.edu.ve/" target="_blank">FACYT</a></p>
                        <p>Copyright © 2015. All Rights Reserved.</p>
                        <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>
</div>

</body>
</html>
