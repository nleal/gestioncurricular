<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="es" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jcarousel.css" rel="stylesheet" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/flexslider.css" rel="stylesheet" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" />

    <!-- Owl Carousel Assets -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/owl-carousel/owl.theme.css" rel="stylesheet">

<!-- Theme skin -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<?php 
Yii::app()->clientScript->registerCoreScript('jquery');     
Yii::app()->clientScript->registerCoreScript('jquery.ui'); 
Yii::app()->clientScript->registerCoreScript('bbq'); 

?>
<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img id="logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/top_facyt.png" alt="" />
                    <a class="navbar-brand" href="index.html"><span>G</span>esti&Oacute;n Curricular</a>
                </div>
                <div class="navbar-collapse collapse ">
					<nav>
		<?php 

		
		$this->widget('zii.widgets.CMenu',array(
		'id'=>'art-hmenu',	
                'items'=>array(
                                array('label'=>'Inicio', 'url'=>array('/site/index')),
                                array('label'=>'Asignatura ▼',
										'linkOptions'=> array(
										'class' => 'dropdown-toggle',
										'data-toggle' => 'dropdown',),
										'itemOptions' => array('class'=>'dropdown')
									,'url'=>array(''),'visible'=>(Yii::app()->user->checkAccess('coordinador') ||  Yii::app()->user->checkAccess('director') ),
                                'items'=>array(
										array('label'=>'Cargar', 'url'=>array('/materia/create'),'visible'=>Yii::app()->user->checkAccess('director')),
                                        array('label'=>'Administrar', 'url'=>array('/materia/admin'),'visible'=>Yii::app()->user->checkAccess('director')),
                                        array('label'=>'Consulta Asigantura', 'url'=>array('/materia/historico') ,'visible'=>(Yii::app()->user->checkAccess('coordinador') || Yii::app()->user->checkAccess('director'))),
                                        //array('label'=>'Configuracion por periodos', 'url'=>array('/MatDepNivel/create'),'visible'=>Yii::app()->user->checkAccess('director')),
                                        array('label'=>'Historico', 'url'=>array('/materia/listarhistoricomatria'),'visible'=>Yii::app()->user->checkAccess('director')),
										),'class'=>'dropdown' ),                                
								array('label'=>'Usuarios ▼',
										'linkOptions'=> array(
										'class' => 'dropdown-toggle',
										'data-toggle' => 'dropdown',),
										'itemOptions' => array('class'=>'dropdown')
									,'url'=>array(''),'visible'=>(Yii::app()->user->checkAccess('admin')),
                                'items'=>array(
										array('label'=>'Cargar Usuario', 'url'=>array('/usuario/create'),'visible'=>(Yii::app()->user->checkAccess('director') || Yii::app()->user->checkAccess('admin'))),
                                        array('label'=>'Administrar', 'url'=>array('/usuario/admin'),'visible'=>(Yii::app()->user->checkAccess('director') || Yii::app()->user->checkAccess('admin'))),
										),'class'=>'dropdown' ),
                                array('label'=>'Pensum ▼',
										'linkOptions'=> array(
										'class' => 'dropdown-toggle',
										'data-toggle' => 'dropdown',),
										'itemOptions' => array('class'=>'dropdown')
									,'url'=>array(''),'visible'=>(Yii::app()->user->checkAccess('coordinador') || Yii::app()->user->checkAccess('director') ),
                                'items'=>array(
										array('label'=>'Cargar', 'url'=>array('/pensumhistorico/create'),'visible'=>Yii::app()->user->checkAccess('director')),
                                        array('label'=>'Consultar', 'url'=>array('/pensumhistorico/listar'),'visible'=>(Yii::app()->user->checkAccess('coordinador')|| Yii::app()->user->checkAccess('director'))),
                                        array('label'=>'Administrar', 'url'=>array('/pensumhistorico/admin'),'visible'=>Yii::app()->user->checkAccess('director')),
										),'class'=>'dropdown' ),
                                array('label'=>'Programa ▼', 
										'linkOptions'=> array(
										'class' => 'dropdown-toggle',
										'data-toggle' => 'dropdown',),
										'itemOptions' => array('class'=>'dropdown')
									,'url'=>array(''),'visible'=>(Yii::app()->user->checkAccess('coordinador') || Yii::app()->user->checkAccess('director')),
										'items'=>array(
										array('label'=>'Cargar', 'url'=>array('/programa/create'),'visible'=>Yii::app()->user->checkAccess('director')),
                                        array('label'=>'Consultar Programa', 'url'=>array('/programa/listadepartamento'),'visible'=>(Yii::app()->user->checkAccess('coordinador')|| Yii::app()->user->checkAccess('director'))),
                                        array('label'=>'Administar ', 'url'=>array('/programa/admin'),'visible'=>Yii::app()->user->checkAccess('director')),
                                        array('label'=>'Administrar Asignatura', 'url'=>array('/materia/admin'),'visible'=>Yii::app()->user->checkAccess('director')),
                                        array('label'=>'Agregar Asignatura', 'url'=>array('/materia/create'),'visible'=>Yii::app()->user->checkAccess('director')),
										)
                                ),
                                array('label'=>'Agenda ▼', 
										'linkOptions'=> array(
										'class' => 'dropdown-toggle',
										'data-toggle' => 'dropdown',),
										'itemOptions' => array('class'=>'dropdown')
									,'url'=>array('/agenda/index'),'visible'=>(Yii::app()->user->checkAccess('coordinador') || Yii::app()->user->checkAccess('director')),
										'items'=>array(
										array('label'=>'Cargar Agenda', 'url'=>array('/agenda/create'),'visible'=>Yii::app()->user->checkAccess('director')),
                                        array('label'=>'Consultar', 'url'=>array('/agenda/listaagenda'),'visible'=>(Yii::app()->user->checkAccess('coordinador') || Yii::app()->user->checkAccess('coordinador'))),
                                        array('label'=>'Administrar', 'url'=>array('/agenda/admin'),'visible'=>Yii::app()->user->checkAccess('director')),
										)
                                ),
                                array('label'=>'Actas ▼', 
										'linkOptions'=> array(
										'class' => 'dropdown-toggle',
										'data-toggle' => 'dropdown',),
										'itemOptions' => array('class'=>'dropdown')
									,'url'=>array('/acta/index'),'visible'=>(Yii::app()->user->checkAccess('coordinador') || Yii::app()->user->checkAccess('director') ),
										'items'=>array(
										array('label'=>'Cargar', 'url'=>array('/acta/create'),'visible'=>Yii::app()->user->checkAccess('director')),
										array('label'=>'Administrar', 'url'=>array('/acta/admin'),'visible'=>Yii::app()->user->checkAccess('director')),
                                        array('label'=>'Consultar', 'url'=>array('/acta/listaactas'),'visible'=>(Yii::app()->user->checkAccess('coordinador')|| Yii::app()->user->checkAccess('director'))),
										)),
								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			
			'htmlOptions' => array( 'class' => 'nav navbar-nav' ),
			 'submenuHtmlOptions' => array('class' => 'dropdown-menu')  
		)); ?>
		</nav>
  </div>
            </div>
        </div>
	</header>
	
	
	
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
		<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
			</div>
		</div>
	</div>
	</section>

	<?php 
	if(Yii::app()->controller->id=='site' && Yii::app()->controller->action->id=='index'){ ?>
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slides/1.png" alt="" />
               <!-- <div class="flex-caption">
                   <h3>Modern Design</h3> 
					<p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>-->
              </li>
              <li>
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slides/2.png" alt="" />
                
                
                <!-- <div class="flex-caption">
                   <h3>Fully Responsive</h3> 
					<p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>-->
              </li>
              <li>
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slides/1.png" alt="" />
                <!--<div class="flex-caption">
                    <h3>Clean & Fast</h3> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>-->
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	</section>
	
	<?php } ?>
	
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<?php echo $content; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	
	 <?php //if(Yii::app()->controller->action->id=='index'){ ?>
		 
	<?php	 if(Yii::app()->controller->id=='site' && Yii::app()->controller->action->id=='index'){ ?>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Misi&oacute;n</h4>
								<div class="icon">
								<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Leer mas...</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Visi&oacute;n</h4>
								<div class="icon">
								<i class="fa fa-pagelines fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Leer mas...</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Quienes Somos</h4>
								<div class="icon">
								<i class="fa fa-edit fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Leer mas...</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Que Hacenmos</h4>
								<div class="icon">
								<i class="fa fa-code fa-3x"></i>
								</div>
								<p>
								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">Leer mas...</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Enlaces de Interés:</h4>
			
					
					
					

    <div id="owl-demo" >
              
      <div class="item"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/assets/correouc.png" alt="Owl Image"></div>
      <div class="item"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/assets/cultura.png" alt="Owl Image"></div>
      <div class="item"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/assets/dch.png" alt="Owl Image"></div>
      <div class="item"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/assets/entornovirtual.png" alt="Owl Image"></div>
      <div class="item"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/assets/faraute.png" alt="Owl Image"></div>
      <div class="item"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/assets/intranet.png" alt="Owl Image"></div>
      <div class="item"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/assets/pasantias.png" alt="Owl Image"></div>
      <div class="item"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/assets/sice.png" alt="Owl Image"></div>
     
    </div>


					
					
					
					
				
			</div>
		</div>

	</div>
	</section>
	<?php }
	?>
	
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<img class="" alt="UC" src="http://www.facyt.uc.edu.ve/sites/default/files/logo_uc.png" height="90" width="70" style="display:block;margin:0 auto 0 auto;">
				</div>
			
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">FACYT</h5>
					<p>La Facultad Experimental de Ciencias y Tecnología es la séptima Facultad de la Universidad de Carabobo, aprobada por el Consejo Nacional de Universidades el 02 de Julio de 1993, con una orientación hacia el fomento, apoyo y desarrollo de la investigación científica tecnológica, organizada por departamentos que otorgan el título en la licenciatura : Química, Computación, Física, Matemáticas y Biología.</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Contacto</h5>
					
					<address>
					<strong>Dirección:</strong>UC, FACYT, Campus Bárbula, Estado Carabobo.</address>
					<p>
						<i class="icon-phone"></i> <strong>Teléfono:</strong> (0241) 6004000 Ext. 315061 <br /><br />
						<i class="icon-envelope-alt"></i> <strong>Email:</strong> email@facyt.com
					</p>
					
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">S&iacute;guenos</h5>
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>

					</ul>
				</div>
			</div>
			
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Desarrollado por FaCyT-UC. </span> 
						</p>
                        <!-- 
                            All links in the footer should remain intact. 
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Moderna
                        -->
					</div>
				</div>
				<div class="col-lg-6">
					<!--<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>-->
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
 <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>
 
<script type="text/javascript">
    $(document).ready(function(){
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });
    });
</script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/owl-carousel/owl.carousel.js"></script>

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.fancybox-media.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/google-code-prettify/prettify.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/portfolio/jquery.quicksand.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/portfolio/setting.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flexslider.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/animate.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>






</body>
</html>
