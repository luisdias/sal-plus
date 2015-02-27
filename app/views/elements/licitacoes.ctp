<?php
/**
    SAL - Sistema de Acompanhamento de Licitações
    Copyright (C) 2011-2015  Smartbyte - Luís Dias

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    Contact : contato@smartbyte.com.br
 
 */
?>
<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Licitações relacionadas</h4>    
    <?php if (!empty($currentModel['Licitacao'])):?>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
            <tr>
                <th>Status</th>
                <th>Edital</th>
                <th>Código</th>                
                <th>Índice</th>
                <th>Data Abertura</th>
                <th>Modalidade</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th class="actions">Ações</th>
            </tr>
            </thead>
            <?php foreach ($currentModel['Licitacao'] as $licitacao): ?>
                <tr<?php echo $class;?>>
                    <td data-title="Status"><?php echo $licitacao['status'];?></td>
                    <td data-title="Edital"><?php echo $licitacao['num_edital'];?></td>
                    <td data-title="Código"><?php echo $licitacao['cl'];?></td>
                    <td data-title="Índice"><?php echo $licitacao['indice'];?></td>
                    <td data-title="Data Abertura"><?php echo $licitacao['dt_abertura'];?></td>
                    <td data-title="Modalidade"><?php echo $modalidades[$licitacao['modalidade_id']];?></td>
                    <td data-title="Tipo"><?php echo $tipos[$licitacao['tipolicitacao_id']];?></td>
                    <td data-title="Valor"><span class="floatright"><?php echo $this->Number->format($licitacao['vlr_lic'],
                        array('places' => 2, 'before'=>'', 'escape' => false, 'decimals' => ',', 'thousands' => '.'));?></span></td>
                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'licitacoes', 'action' => 'view', $licitacao['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'licitacoes', 'action' => 'edit', $licitacao['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'licitacoes', 'action' => 'delete', $licitacao['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $licitacao['id'])); ?>
                    </td>                        
                </tr>
            <?php endforeach; ?>
            </table>
        </section>
    <?php endif; ?>    
    </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->			
    </div><!-- /row -->             
    <div class="related-actions">
    <?php echo $this->Html->link(__('Nova Licitação', true), array('controller' => 'licitacoes', 'action' => 'add'),array('class'=>'btn btn-primary'));?> </li>
    </div>        
</div>