<?php
/**
 * SAL Plus :: Sistema de Acompanhamento de Licitações e Contratos
 * Copyright : Luís E. S. Dias 2013-2015
 * smartbyte.systems@gmail.com
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('SAL PLUS - Sistema de Acompanhamento de Licitações e Contratos :'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

                echo $this->Html->css("/assets/css/bootstrap.css");
                echo $this->Html->css("/assets/font-awesome/css/font-awesome.css");
                echo $this->Html->css("/assets/css/style.css");
                echo $this->Html->css("/assets/css/style-responsive.css");
                echo $this->Html->css("/assets/css/table-responsive.css");
                echo $this->Html->css("/assets/css/salplus.css");                
                echo $this->Html->css('jquery-ui/ui-lightness/jquery-ui-1.10.2.custom.min');                
                
                echo $this->Html->script(array("/assets/js/jquery.js"));
                echo $this->Html->script(array('jquery-ui/js/jquery-ui-1.10.2.custom.min'));
                echo $this->Html->script('jquery-ui/js/jquery.ui.datepicker-pt');     
                echo $this->Html->script(array("/assets/js/bootstrap.min.js"));
                echo $this->Html->script(array("/assets/js/jquery.dcjqaccordion.2.7.js"));
                echo $this->Html->script(array("/assets/js/jquery.scrollTo.min.js"));
                echo $this->Html->script(array("/assets/js/jquery.nicescroll.js"));                
                echo $this->Html->script(array('default.js'));

                echo $scripts_for_layout;
	?>
<script type="text/javascript">
    firstLevel = "<?php echo Router::url('/',true); ?>";
</script>    
</head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>SAL Plus</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'usuarios','action'=>'logout')); ?>">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <h5 class="centered">
                    <?php echo '<b>Login : </b>' . $user['Usuario']['login'] . '<br/>'; ?>                
                    <?php echo '<b>Nome : </b>' . $user['Usuario']['name'] . '<br/>'; ?>
                    <?php echo '<b>Perfil : </b>' . $user['Usuario']['perfil']; ?>                                            
                  </h5>
              	  	
                  <li class="mt">
                      <a href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'mapas','action'=>'index')); ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>                      
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:null;" >
                          <i class="fa fa-desktop"></i>
                          <span>Licitações</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'licitacoes','action'=>'index')); ?>">Listar</a></li>
                          <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'eventos','action'=>'index')); ?>">Eventos</a></li>
                          <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'lotes','action'=>'index')); ?>">Lotes</a></li>
                          <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'resultados','action'=>'index')); ?>">Resultados</a></li>
                          <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'contratantes','action'=>'index')); ?>">Contratantes</a></li>
                          <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'empresas','action'=>'index')); ?>">Empresas</a></li>
                            <?php if ( $user['Usuario']['perfil'] == 'admin' ) { ?>
                                <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'modalidades','action'=>'index')); ?>">Modalidades</a></li>
                                <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'tipolicitacoes','action'=>'index')); ?>">Tipos de licitações</a></li>
                                <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'tipoeventos','action'=>'index')); ?>">Tipos de eventos</a></li>      
                            <?php } ?>                            
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Contratos</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'contratos','action'=>'index')); ?>">Listar</a></li>
                        <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'aditivos','action'=>'index')); ?>">Aditivos</a></li>
                        <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'ocorrencias','action'=>'index')); ?>">Ocorrências</a></li>
                        <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'recursos','action'=>'index')); ?>">Recursos</a></li>
                        <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'pessoas','action'=>'index')); ?>">Pessoas</a></li>
                        <?php if ( $user['Usuario']['perfil'] == 'admin' ) { ?>
                            <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'situacoes','action'=>'index')); ?>">Situações</a></li>
                            <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'reajustes','action'=>'index')); ?>">Reajustes</a></li>
                            <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'garantias','action'=>'index')); ?>">Garantias</a></li>
                            <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'tipoaditivos','action'=>'index')); ?>">Tipos de aditivos</a></li>
                            <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'tipoocorrencias','action'=>'index')); ?>">Tipos de ocorrências</a></li>
                        <?php } ?>
                        <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'recebimentos','action'=>'index')); ?>">Recebimentos</a></li>
                      </ul>
                  </li>
                  <li class="mt" style="margin-top: 0;">
                      <a href="<?php echo $this->Html->url(array('plugin'=>'report_manager','controller'=>null,'action'=>'reports')); ?>" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Relatórios</span>
                      </a>
                  </li>   
                  <?php if ( $user['Usuario']['perfil'] == 'admin' ) { ?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Configurações</span>
                      </a>
                      <ul class="sub">                          
                          <li><a  href="<?php echo $this->Html->url(array('plugin'=>null,'controller'=>'usuarios','action'=>'index')); ?>">Usuários</a></li>
                      </ul>
                  </li>
                  <?php } ?> 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
        <?php echo $content_for_layout; ?>
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              © <a href="http://www.smartbyte.com.br" target="blank">Smartbyte</a> 2013-2015
              Design by 2014 - Alvarez.is
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
  <?php echo $this->Html->script(array("/assets/js/common-scripts.js")); ?> 
  <?php echo $this->element('sql_dump'); ?>  
  </body>
</html>