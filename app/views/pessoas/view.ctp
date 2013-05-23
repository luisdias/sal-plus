<div class="pessoas view">
<div class="table">
    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Pessoa</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $pessoa['Pessoa']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Nome'); ?></strong></td>
		<td width="574"><?php echo $pessoa['Pessoa']['nome']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Email'); ?></strong></td>
		<td width="574"><?php echo $pessoa['Pessoa']['email']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Telefone'); ?></strong></td>
		<td width="574"><?php echo $pessoa['Pessoa']['telefone']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Celular'); ?></strong></td>
		<td width="574"><?php echo $pessoa['Pessoa']['celular']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Fax'); ?></strong></td>
		<td width="574"><?php echo $pessoa['Pessoa']['fax']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Website'); ?></strong></td>
		<td width="574"><?php echo $pessoa['Pessoa']['website']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Papel'); ?></strong></td>
		<td width="574"><?php echo $pessoa['Pessoa']['papel']; ?></td>
		</tr>
                <?php echo $this->element('adminfields_td',array('currentModel' => $pessoa['Pessoa'])); ?>
    </table>
</div>
</div>
<?php echo $this->element('recursos',array('currentModel' => $pessoa)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->