<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Empresa</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['id']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Nome</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['name']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">CNPJ</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['cnpj']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Endereço</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['endereco']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Complemento</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['complemento']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Bairro</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['bairro']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Cidade</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['cidade']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Estado</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['estado']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">CEP</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['cep']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Telefone</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['telefone']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Website</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['website']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Tipo</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['tipo_emp']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Contato</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['contato_01']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Telefone</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['telefone_01']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Email</label>
                    <div class="col-sm-10"><?php echo $empresa['Empresa']['email_01']; ?></div>
                </div>
                <?php echo $this->element('adminfields',array('currentModel' => $empresa['Empresa'])); ?>
            </div>
        </div>
    </div>
</div>  
<?php echo $this->element('resultados',array('currentModel' => $empresa)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->