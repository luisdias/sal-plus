<div class="lotes view">
<h2><?php  __('Lote');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>

		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Edital Licitação'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($licitacoes[$lote['Licitacao']['id']], array('controller' => 'licitacoes', 'action' => 'view', $lote['Licitacao']['id'])); ?>
			&nbsp;
		</dd>                
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Número'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lote['Lote']['num_lote']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Number->format($lote['Lote']['vlr_lote'],array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => ',',
                    'thousands' => '.')
                );?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prazo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lote['Lote']['prazo_lote']; ?>
			&nbsp;
		</dd>
                <?php echo $this->element('adminfields',
                        array('currentModel' => $lote['Lote'],'class'=>$class,'i'=>$i)); ?>
	</dl>
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->