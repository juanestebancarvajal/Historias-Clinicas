<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
        <!--
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
        
	<div id="mainmenu">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Smart MR</a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Historias Clinicas <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a class="btn-crear" href="<?php echo Yii::app()->createUrl('/site/index'); ?>">Crear</a></li>
                            <li><a class = "btn-editar "href="<?php echo Yii::app()->createUrl('/pacientes/admin'); ?>">Editar</a></li>
      
                          </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo Yii::app()->createUrl('/users/create'); ?>">Registrar</a></li>
                            <li><a href="<?php echo Yii::app()->createUrl('/site/login'); ?>">Ingresar</a></li>
                          </ul>
                      </li>
                      <li><a href="<?php echo Yii::app()->createUrl('/site/contact'); ?>">Contacto</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('/site/about'); ?>">Acerca de</a></li>
                    </ul>

                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
                <div class="menu-lateral">
                    <div class="btn-group-vertical">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                            <div class="btn-group-vertical">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class=""><a href="<?php echo Yii::app()->createUrl('/pacientes/create'); ?>">Informacion General</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/consulta/create'); ?>">Motivo De La Consulta</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/sintomas/create'); ?>">Enfermedad Actual</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/enfermedad'); ?>">Interrogatorio por sistema</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/enfermedad'); ?>">Antecedente</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/pendiente'); ?>">Examen Fisico</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/pendiente'); ?>">Resumen y opinion</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/pendiente'); ?>">Diagnostico</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-9">

                            	<?php echo $content; ?>
                        </div>
                        
                    </div>
                </div>


	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Universidad EAFIT.<br/>
		Todos los derechos reservados<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
    <script>
        $( document ).ready(function() {

            $( ".btn-crear" ).click(function() {
            $( ".btn-group-vertical" ).show( "slow", function() {});
        });


});

    </script>
</html>
