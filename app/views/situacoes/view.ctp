<div class="situacoes view">
<div class="table">
    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Situação</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $situacao['Situacao']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Descrição'); ?></strong></td>
		<td width="574"><?php echo $situacao['Situacao']['title']; ?></td>
		</tr>
                <?php echo $this->element('adminfields_td',array('currentModel' => $situacao['Situacao'])); ?>
    </table>
</div>
</div>
<?php echo $this->element('contratos',array('currentModel' => $situacao)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->