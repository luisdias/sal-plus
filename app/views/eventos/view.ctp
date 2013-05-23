<div class="eventos view">
<h2><?php  __('Evento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Edital Licitação'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($licitacoes[$evento['Licitacao']['id']], array('controller' => 'licitacoes', 'action' => 'view', $evento['Licitacao']['id'])); ?>
			&nbsp;
		</dd>            
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evento['Evento']['dt_eve']; ?>
			&nbsp;
		</dd>
                
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Texto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evento['Evento']['texto_eve']; ?>
			&nbsp;
		</dd>                
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoeventos[$evento['Evento']['tipoevento_id']]; ?>
			&nbsp;
		</dd>
                <?php echo $this->element('adminfields',
                        array('currentModel' => $evento['Evento'],'class'=>$class,'i'=>$i)); ?>
	</dl>
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->