<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Garantia</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $garantia['Garantia']['id']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Descrição</label>
                    <div class="col-sm-10"><?php echo $garantia['Garantia']['title']; ?></div>
                </div>                
                <?php echo $this->element('adminfields_td',array('currentModel' => $garantia['Garantia'])); ?>  
            </div>
        </div>
    </div>
</div>                 
<?php echo $this->element('contratos',array('currentModel' => $garantia)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->