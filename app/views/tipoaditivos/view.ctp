<div class="tipoaditivos view">
<div class="table">
    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Tipo de aditivo</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $tipoaditivo['Tipoaditivo']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Descrição'); ?></strong></td>
		<td width="574"><?php echo $tipoaditivo['Tipoaditivo']['title']; ?></td>
		</tr>
                <?php echo $this->element('adminfields_td',array('currentModel' => $tipoaditivo['Tipoaditivo'])); ?>
    </table>
</div>
</div>
<?php echo $this->element('aditivos',array('currentModel' => $tipoaditivo)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->
