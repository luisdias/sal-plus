<div class="related">
<?php echo $this->element('mapa_eventos'); ?>
<?php echo $this->element('mapa_recebimentos'); ?>
<?php echo $this->element('mapa_atrasos'); ?>
<?php echo $this->element('mapa_contratos'); ?>
<div class="help">
<p><b>Legendas:</b><br/><br/>
<?php echo $this->Html->image('flag_red.png');?> = de hoje a 15 dias<br/>
<?php echo $this->Html->image('flag_yellow.png');?> = de 15 a 30 dias<br/>
<?php echo $this->Html->image('flag_green.png');?> = maior que 30 dias<br/>
</p>    
</div>
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->