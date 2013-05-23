<div class="reajustes view">
<div class="table">
    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Reajuste</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $reajuste['Reajuste']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Descrição'); ?></strong></td>
		<td width="574"><?php echo $reajuste['Reajuste']['title']; ?></td>
		</tr>
                <?php echo $this->element('adminfields_td',array('currentModel' => $reajuste['Reajuste'])); ?>
    </table>
</div>
</div>
<?php echo $this->element('contratos',array('currentModel' => $reajuste)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->