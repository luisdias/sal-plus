<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Usuário</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $usuario['Usuario']['id']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Nome</label>
                    <div class="col-sm-10"><?php echo $usuario['Usuario']['name']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Login</label>
                    <div class="col-sm-10"><?php echo $usuario['Usuario']['login']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Perfil</label>
                    <div class="col-sm-10"><?php echo $usuario['Usuario']['perfil']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Criado</label>
                    <div class="col-sm-10"><?php echo $usuario['Usuario']['created']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Modificado</label>
                    <div class="col-sm-10"><?php echo $usuario['Usuario']['modified']; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->element('licitacoes',array('currentModel' => $usuario)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->