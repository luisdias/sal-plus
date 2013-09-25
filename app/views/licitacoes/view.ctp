<div class="licitacoes view">
<h2><?php  __('Licitação');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Código'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['cl']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Edital'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['num_edital']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Índice'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['indice']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Local'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['local']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Objeto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['objeto']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Histórico'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['historico']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Abertura'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['dt_abertura']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modalidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($licitacao['Modalidade']['title'], array('controller' => 'modalidades', 'action' => 'view', $licitacao['Modalidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($licitacao['Tipolicitacao']['title'], array('controller' => 'tipolicitacoes', 'action' => 'view', $licitacao['Tipolicitacao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Regime'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licitacao['Licitacao']['regime']; ?>
			&nbsp;
		</dd>                
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuário'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($licitacao['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $licitacao['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>><span class="floatright">
			<?php echo $this->Number->format($licitacao['Licitacao']['vlr_lic'],
                        array(
                        'before' => '', 'after' => '', 'zero' => 0, 'places' => 2, 'thousands' => '.',
                        'decimals' => ',', 'negative' => '()', 'escape' => true
                        )                                
                        ); ?>
			</span>
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contratante'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($licitacao['Contratante']['name'], array('controller' => 'contratantes', 'action' => 'view', $licitacao['Contratante']['id'])); ?>
			&nbsp;
		</dd>                
                <?php echo $this->element('adminfields',
                        array('currentModel' => $licitacao['Licitacao'],'class'=>$class,'i'=>$i)); ?>
	</dl>
</div>
<br/>

<?php echo $this->element('eventos',array('currentModel' => $licitacao)); ?>

<?php echo $this->element('lotes',array('currentModel' => $licitacao)); ?>

<?php echo $this->element('resultados',array('currentModel' => $licitacao,'empresas' => $empresas)); ?>

<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->