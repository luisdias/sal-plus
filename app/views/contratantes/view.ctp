<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Contratante</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $contratante['Contratante']['id']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Nome</label>
                    <div class="col-sm-10"><?php echo $contratante['Contratante']['name']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Tipo</label>
                    <div class="col-sm-10"><?php echo $contratante['Contratante']['tipo']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Categoria</label>
                    <div class="col-sm-10"><?php echo $contratante['Contratante']['categoria']; ?></div>
                </div>
                <?php echo $this->element('adminfields',array('currentModel' => $contratante['Contratante'])); ?>
            </div>                
        </div>
    </div>
</div>                
<!-- SALPLUS | Copyright: 2013-2015 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->