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
		<tr>
		<td width="172"><strong><?php __('Criado'); ?></strong></td>
		<td width="574"><?php echo $currentModel['created']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Modificado'); ?></strong></td>
		<td width="574"><?php echo $currentModel['modified']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Modificado por'); ?></strong></td>
		<td width="574"><?php echo $currentModel['modified_by']; ?></td>
		</tr>
<?php } ?>