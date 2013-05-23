<div class="contratantes view">
<h2><?php  __('Contratante');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contratante['Contratante']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contratante['Contratante']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contratante['Contratante']['tipo']; ?>
			&nbsp;
		</dd>    
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Categoria'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contratante['Contratante']['categoria']; ?>
			&nbsp;
		</dd>                 
                <?php echo $this->element('adminfields',
                        array('currentModel' => $contratante['Contratante'],'class'=>$class,'i'=>$i)); ?>
	</dl>
</div>
<?php echo $this->element('licitacoes',array('currentModel' => $contratante)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->