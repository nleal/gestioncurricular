<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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

<div id="art-page-background-glare-wrapper">
    <div id="art-page-background-glare"></div>
</div>
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="art-header-inner">
                <div class="art-headerobject"></div>
                <div class="art-logo">
                                 <h1 class="art-logo-name"><a href="./index.html">Sistema de Gestion Curricular</a></h1>
                                                 <h2 class="art-logo-text">FaCyT</h2>
                                </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="cleared reset-box"></div>
<div class="art-bar art-nav">
<div class="art-nav-outer">
<div class="art-nav-wrapper">

<div class="art-nav-inner">
	<!--<div class="art-hmenu">-->
		<?php $this->widget('zii.widgets.CMenu',array(
		'id'=>'art-hmenu',
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact'),'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	<!--</div>-->
</div>

</div>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                   

                          <div class="cleared"></div>
                        </div>
                        <div class="art-layout-cell art-content">
<div class="art-box art-post">
    <div class="art-box-body art-post-body">
<div class="art-post-inner art-article">
                                <!--<h2 class="art-postheader"><span class="art-postheadericon">Page 1
                                </span></h2>-->
                                                <div class="art-postcontent">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%;">
       <p>Sistema de Gestion</p>
       <?php 
       
       $cli = new MiCliente();
       echo "".$cli->obtenerMensajeRemoto('BIENVENIDOS'); 
       
       
       ?>
   
             <?php //$res_js = json_decode($cli->existeObjetivo("1")); 
              
             // if($res_js){
              
              //foreach( $res_js as $it){
					
				//	echo 'Materia: '.$it->nombre_obj.'<br />';
					
					//}
              //}else echo "cosulta vacia";
              
              
              
              ?>
              <?php //echo "Esta Materia Existe: ".$cli->existeMateria('algoritmo'); ?>
              <?php //echo "Esta Materia Existe: ".$cli->existePensum('Computacion'); ?>
              
              <?php //$res_js = json_decode($cli->existePensum('Computacion')); ?>
       
       
				<?php 
				
			/*	foreach( $res_js as $it){
					
					echo 'Materia: '.$it->nombre_mat.'<br />';
					
					}
				*/
				?>
       
       <?php echo $content; ?>
       
       
       
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%;">
        <ul>
            <li>Jose Ramirez</li>
        
            <li></li>
        
            <li></li>
        </ul>
    </div><div class="art-layout-cell layout-item-0" style="width: 50%;">
        <blockquote style="margin: 10px 0">
            La gestión curricular es la capacidad de organizar y poner en marcha el proyecto pedagógico de la institución a partir de la definición de qué se debe enseñar y qué deben aprender los estudiantes.
        </blockquote>
    </div>
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
                 
                        <p><a href="#">---</a> | <a href="#">---</a> | <a href="#">---</a></p>

<p>Copyright © 2015. By Facyt</p>
<p> All Rights Reserved.</p>
                        <div class="cleared"></div>
                 
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>


<!--FIN -->

</body>
</html>
