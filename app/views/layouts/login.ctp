<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('SAL PLUS - Sistema de Acompanhamento de Licitações e Contratos :'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
                echo $this->Html->css('admin');
                echo $this->Html->css('print','stylesheet',array('media' => 'print'));
		echo $scripts_for_layout;
	?>
</head>
<body>
<div id="main">    
    <div id="header">
        <a href="#" class="logo">SAL Plus :: Sistema de Acompanhamento de Licitações e Contratos</a>  
        <?php echo $this->Session->flash('auth'); ?>                  
    </div>
    
    
    <div id="login-container">
        <div id="login-left-column">
            <h1>Bem-vindo</h1>
            <p>Para testar o sistema utilize um dos logins abaixo de acordo com o perfil desejado:</p>
            <p><b>Administrador</b> ( admin | admin ) : controle total sobre todos os aspectos da aplicação</p>
            <p><b>Usuário</b> ( user1 | teste ) : permissão limitada para gestão de usuários e tabelas auxiliares</p>
            <p><b>Convidado</b> ( guest1 | teste ) : acesso apenas para leitura</p>
        </div>
        <div id="login-right-column">                   
        <?php echo $content_for_layout; ?>
        </div>
    </div>    
    
    <div id="footer">© <a href="http://www.smartbyte.com.br" target="blank">Smartbyte</a> 2013.</div>        
<?php echo $this->element('sql_dump'); ?>      
</div>
     
</body>
</html>