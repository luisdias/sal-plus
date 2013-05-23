<div class="tipoocorrencias view">
    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Tipo de Ocorrência</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $tipoocorrencia['Tipoocorrencia']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Descrição'); ?></strong></td>
		<td width="574"><?php echo $tipoocorrencia['Tipoocorrencia']['title']; ?></td>
		</tr>
                <?php echo $this->element('adminfields_td',array('currentModel' => $tipoocorrencia['Tipoocorrencia'])); ?>
    </table>
</div>
<?php echo $this->element('ocorrencias',array('currentModel' => $tipoocorrencia)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->