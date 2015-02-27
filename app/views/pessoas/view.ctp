<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Pessoa</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $pessoa['Pessoa']['id']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Nome</label>
                    <div class="col-sm-10"><?php echo $pessoa['Pessoa']['nome']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Email</label>
                    <div class="col-sm-10"><?php echo $pessoa['Pessoa']['email']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Telefone</label>
                    <div class="col-sm-10"><?php echo $pessoa['Pessoa']['telefone']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Celular</label>
                    <div class="col-sm-10"><?php echo $pessoa['Pessoa']['celular']; ?></div>
                </div>                 
                <div class="form-group">
                    <label class="col-sm-2">Fax</label>
                    <div class="col-sm-10"><?php echo $pessoa['Pessoa']['fax']; ?></div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-2">Website</label>
                    <div class="col-sm-10"><?php echo $pessoa['Pessoa']['website']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Papel</label>
                    <div class="col-sm-10"><?php echo $pessoa['Pessoa']['papel']; ?></div>
                </div>                
                <?php echo $this->element('adminfields',array('currentModel' => $pessoa['Pessoa'])); ?>
            </div>
        </div>
    </div>
</div>                
<?php echo $this->element('recursos',array('currentModel' => $pessoa)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->