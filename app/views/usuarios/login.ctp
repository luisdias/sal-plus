<?php
    
    echo $this->Form->create('Usuario', array('controller' => 'usuarios', 'action' => 'login','class'=>'form-login'));
    echo $this->Html->tag('h2','SALPLUS :: Login',array('class'=>'form-login-heading'));
    echo "<div class=\"login-wrap\">";
    echo $this->Form->label('login','Login');
    echo $this->Form->input('login',array('label'=>false,'size'=>'40', 'value'=>'admin','class'=>'form-control'));
    echo $this->Html->tag('br');
    echo $this->Form->label('senha','Senha');
    echo $this->Form->input('senha',array('label'=>false,'type'=>'password','size'=>'40', 'value'=>'admin','class'=>'form-control'));
    echo $this->Html->tag('br');
    echo $this->Form->submit('Login',array('class'=>'btn btn-theme btn-block'));
    echo $this->Form->end();
    echo "</div>";
?>
<!-- SALPLUS | Copyright: 2013-2015 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->	