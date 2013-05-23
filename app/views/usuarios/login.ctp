<?php
    echo $this->Html->tag('h2','Login');
    echo $this->Form->create('Usuario', array('controller' => 'usuarios', 'action' => 'login'));
    echo $this->Form->input('login',array('label'=>'Login de usuário','size'=>'40', 'value'=>'admin'));
    echo $this->Form->input('senha',array('type'=>'password','size'=>'40', 'value'=>'admin'));
    echo $this->Html->tag('br');
    echo $this->Form->end('Login');
?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->