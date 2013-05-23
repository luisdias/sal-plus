<?php
/**
 * SAL Plus :: Sistema de Acompanhamento de Licitações e Contratos
 * Copyright : Luís E. S. Dias 2013
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

                echo $this->Html->script(array('jquery-1.9.1.min.js', 'jquery-ui-1.10.1.custom.min.js'));
                echo $this->Html->script(array('easybox/distrib.min'));
                echo $this->Html->script(array('jquery-ui/js/jquery-ui-1.10.2.custom.min'));
                echo $this->Html->script('jquery-ui/js/jquery.ui.datepicker-pt');

                echo $this->Html->css('admin');
                echo $this->Html->css('pagination');
                echo $this->Html->css('print','stylesheet',array('media' => 'print'));
                echo $this->Html->css('easybox/default/easybox.min');
                echo $this->Html->css('jquery-ui/ui-lightness/jquery-ui-1.10.2.custom.min');
                
                echo $this->Html->script(array('default.js'));

                echo $scripts_for_layout;
	?>
<script type="text/javascript">
    firstLevel = "<?php echo Router::url('/',true); ?>";
</script>    
</head>
<body>
<div id="main">    
    <div id="header">
        <a href="#" class="logo">SAL Plus :: Sistema de Acompanhamento de Licitações e Contratos</a>        
        <?php echo $this->Session->flash(); ?>                    
        <ul id="top-navigation">            
            <li><?php echo $this->Html->link(__('Home', true), '/', array('class'=>(($active_class=="Home" ? "active" : "none")))); ?></li>
            <li><?php echo $this->Html->link(__('Licitações', true), '/licitacoes', array('class'=>(($active_class=="Licitacoes" ? "active" : "none")))); ?></li>
            <li><?php echo $this->Html->link(__('Contratos', true), '/contratos', array('class'=>(($active_class=="Contratos" ? "active" : "none")))); ?></li>
            <li><?php echo $this->Html->link(__('Relatórios', true), '/report_manager/reports', array('class'=>(($active_class=="Relatorios" ? "active" : "none")))); ?></li>
            <li><?php echo $this->Html->link(__('Configurações', true), '/usuarios', array('class'=>(($active_class=="Configuracoes" ? "active" : "none")))); ?></li>
        </ul>
    </div>
    <div id="middle">
        <div id="left-column">
            <?php echo $this->element('menu_' . strtolower($active_class)); ?>
            <div id="quick-info">
            <strong class="h">Login Info</strong>
            <div class="box">
            <?php echo '<b>Login : </b>' . $user['Usuario']['login'] . '<br/>'; ?>                
            <?php echo '<b>Nome : </b>' . $user['Usuario']['name'] . '<br/>'; ?>
            <?php echo '<b>Perfil : </b>' . $user['Usuario']['perfil']; ?>
            </div>
            </div>

            <?php echo $this->Html->link(__('Sair', true), array('controller' => 'usuarios', 'action' => 'logout', 'plugin'=>null), array('class'=>'link')); ?>
        </div>
        <div id="center-column">                   
        <?php echo $content_for_layout; ?>
        </div>
    </div>
    <div id="footer">
        <p>
            © <a href="http://www.smartbyte.com.br" target="blank">Smartbyte</a> 2013.
            
            <span class="floatright">
                <a href="http://www.famfamfam.com" target="blank">Icons by FamFamFam</a> | 
                <a href="http://www.webresourcesdepot.com/free-admin-template-for-web-applications/" target="blank">Design by Web Resources Depot</a>
            </span>
        </p>
    </div>        
    <?php echo $this->element('sql_dump'); ?>    
</div>
</body>
</html>