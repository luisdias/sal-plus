<?php
/**
    SAL - Sistema de Acompanhamento de Licitações
    Copyright (C) 2011  Smartbyte - Luís Dias

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
<?php if ( $user['Usuario']['perfil'] == 'admin' ) { ?>
        <div class="form-group">
            <label class="col-sm-2">Criado</label>
            <div class="col-sm-10">
                <?php echo $currentModel['created']; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2">Modificado</label>
            <div class="col-sm-10">
                <?php echo $currentModel['modified']; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2">Modificado por</label>
            <div class="col-sm-10">
                <?php echo $currentModel['modified_by']; ?>
            </div>
        </div>
<?php } ?>