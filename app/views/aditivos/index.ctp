<div id="center-column">
    <div class="top-bar">
        <?php 
        if ( isset($this->passedArgs['fk']) ) {
            echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=>$this->passedArgs['fk']), array('class'=>'btn btn-primary'));
        } else {
            echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary'));
        }
        ?>            
           
    </div> 
    <div class="filter-form">
    <?php
        if ( !isset($this->passedArgs['fk']) ) {
            echo $form->create('Aditivo', array(
                'url' => array_merge(array('action' => 'find'), $this->params['pass']),
                'class'=>'form-inline'
            ));
           
            echo "<div class=\"form-group\">";
            echo $form->input('contrato_id', array('label'=>'Contrato','div' => false,'empty'=>'-- Todos --','class'=>'form-control'));
            echo $form->submit('Filtrar', array('div' => false, 'alt'=>'filtrar', 'title'=>'filtrar','class'=>'btn btn-primary'));
            echo "</div>";
            echo $form->end();
        }
    ?>      
    </div>
    <?php if ( $aditivos != null) { ?>        
    <div class="aditivos index">
            <div class="row mt">
            <div class="col-lg-12">
            <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Aditivos
            <?php 
            if ( isset($this->passedArgs['fk']) )
                echo ' do contrato ' . $contratos[$this->passedArgs['fk']];
            ?>
            </h4>
            <section id="unseen">
            <table class="table table-bordered table-striped table-advance table-hover">
            <thead>
            <tr>
                <?php if ( !isset($this->passedArgs['fk']) ) { ?>
                <th><?php echo $this->Paginator->sort('Contrato','Contrato.numero');?></th>
                <?php } ?>
                <th><?php echo $this->Paginator->sort('Número','numero');?></th>
                <th class="hidden-phone"><?php echo $this->Paginator->sort('Processo','numero_processo');?></th>
                <th class="hidden-phone"><?php echo $this->Paginator->sort('Ano','ano_processo');?></th>
                <th class="hidden-phone"><?php echo $this->Paginator->sort('Tipo','Tipoaditivo.title');?></th>
                <th class="hidden-phone"><?php echo $this->Paginator->sort('Documento','documento');?></th>
                <th class="actions"><?php __('Ações');?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($aditivos as $aditivo): ?>
            <tr>
            <?php if ( !isset($this->passedArgs['fk']) ) { ?>
            <td>
                <?php echo $this->Html->link($aditivo['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $aditivo['Contrato']['id'])); ?>
            </td>
            <?php } ?>
            <td><?php echo $aditivo['Aditivo']['numero']; ?>&nbsp;</td>
            <td class="hidden-phone"><?php echo $aditivo['Aditivo']['numero_processo']; ?>&nbsp;</td>
            <td class="hidden-phone"><?php echo $aditivo['Aditivo']['ano_processo']; ?>&nbsp;</td>
            <td class="hidden-phone">
                <?php echo $this->Html->link($aditivo['Tipoaditivo']['title'], array('controller' => 'tipoaditivos', 'action' => 'view', $aditivo['Tipoaditivo']['id'])); ?>
            </td>
            <td class="hidden-phone">
                <div class="project-wrapper">
                    <div class="project">                
                        <div class="photo-wrapper">
                            <div class="photo">
                                <center>
                <?php 
                if (!empty($aditivo['Aditivo']['documento'])) {
                    echo $this->Html->link(
                            $this->Html->image(str_replace('img/','',h($aditivo['Aditivo']['documento'])),array('width'=>'70','height'=>'70'))
                         ,'/' .  $aditivo['Aditivo']['documento'],array('escape' => false,'class'=>"fancybox"));
                } else {
                    echo $this->Html->image('aditivos/sem-documento.png',array('width'=>'70','height'=>'70'));
                };
                ?>&nbsp;
                                </center>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </td>            
            <td>
                <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Selecione <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><?php echo $this->Html->link('Documento', array('action' => 'file', $aditivo['Aditivo']['id']),array('escape' => false)); ?></li>
                    <li class="divider"></li>
                    <li><?php echo $this->Html->link('Consultar', array('action' => 'view', $aditivo['Aditivo']['id']),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link('Editar', array('action' => 'edit', $aditivo['Aditivo']['id'], 'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false)); ?></li>                    
                    <li><?php echo $this->Html->link('Excluir', array('action' => 'delete', $aditivo['Aditivo']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o aditivo # %s?', true), $aditivo['Aditivo']['numero'])); ?></li>
                  </ul>
                </div>                
            </td>
    </tr>
<?php endforeach; ?>
            </tbody>
            </table>
            </section>
        <?php echo $this->element('paginator'); ?>
        </div><!-- /content-panel -->
        </div><!-- /col-lg-4 -->			
        </div><!-- /row -->                
        </div>                
        <?php 
        } else {
            echo '<div style="clear:both;" class="alert alert-info"><i class=" fa fa-ellipsis-v"></i>&nbsp;<b>Não existem itens para listar</b></div>';
        } ?>                           
</div>
<?php echo $this->Html->script(array("/assets/js/fancybox/jquery.fancybox.js")); ?>
<script type="text/javascript">
    $(function() {
      //    fancybox
        jQuery(".fancybox").fancybox();
    });

</script>
<!-- SALPLUS | Copyright: 2013-2015 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->