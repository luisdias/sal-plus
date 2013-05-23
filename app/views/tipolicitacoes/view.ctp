<div class="tipolicitacoes view">
<h2><?php  __('Tipo de licitação');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipolicitacao['Tipolicitacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipolicitacao['Tipolicitacao']['title']; ?>
			&nbsp;
		</dd>
                <?php echo $this->element('adminfields',
                        array('currentModel' => $tipolicitacao['Tipolicitacao'],'class'=>$class,'i'=>$i));
                ?>
	</dl>
</div>
<?php echo $this->element('licitacoes',array('currentModel' => $tipolicitacao)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->