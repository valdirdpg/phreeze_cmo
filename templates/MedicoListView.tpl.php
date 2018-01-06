<?php
	$this->assign('title','CMO | Medicos');
	$this->assign('nav','medicos');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/medicos.js").wait(function(){
		$(document).ready(function(){
			page.init();
		});
		
		// hack for IE9 which may respond inconsistently with document.ready
		setTimeout(function(){
			if (!page.isInitialized) page.init();
		},1000);
	});
</script>

<div class="container">

<h1>
	<i class="icon-th-list"></i> Medicos
	<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Search..." />
		<button class='btn add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- underscore template for the collection -->
	<script type="text/template" id="medicoCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Idmedicos">Idmedicos<% if (page.orderBy == 'Idmedicos') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NmMedico">Nm Medico<% if (page.orderBy == 'NmMedico') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_CpfMedico">Cpf Medico<% if (page.orderBy == 'CpfMedico') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_RgMedico">Rg Medico<% if (page.orderBy == 'RgMedico') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NrCrm">Nr Crm<% if (page.orderBy == 'NrCrm') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
<!-- UNCOMMENT TO SHOW ADDITIONAL COLUMNS
				<th id="header_NmUsuario">Nm Usuario<% if (page.orderBy == 'NmUsuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Senha">Senha<% if (page.orderBy == 'Senha') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NumAcesso">Num Acesso<% if (page.orderBy == 'NumAcesso') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_LaudoIdlaudo">Laudo Idlaudo<% if (page.orderBy == 'LaudoIdlaudo') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_CdEspecialidade">Cd Especialidade<% if (page.orderBy == 'CdEspecialidade') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
-->
			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('idmedicos')) %>">
				<td><%= _.escape(item.get('idmedicos') || '') %></td>
				<td><%= _.escape(item.get('nmMedico') || '') %></td>
				<td><%= _.escape(item.get('cpfMedico') || '') %></td>
				<td><%= _.escape(item.get('rgMedico') || '') %></td>
				<td><%= _.escape(item.get('nrCrm') || '') %></td>
<!-- UNCOMMENT TO SHOW ADDITIONAL COLUMNS
				<td><%= _.escape(item.get('nmUsuario') || '') %></td>
				<td><%= _.escape(item.get('senha') || '') %></td>
				<td><%= _.escape(item.get('numAcesso') || '') %></td>
				<td><%= _.escape(item.get('laudoIdlaudo') || '') %></td>
				<td><%= _.escape(item.get('cdEspecialidade') || '') %></td>
-->
			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<!-- underscore template for the model -->
	<script type="text/template" id="medicoModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idmedicosInputContainer" class="control-group">
					<label class="control-label" for="idmedicos">Idmedicos</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="idmedicos"><%= _.escape(item.get('idmedicos') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nmMedicoInputContainer" class="control-group">
					<label class="control-label" for="nmMedico">Nm Medico</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nmMedico" placeholder="Nm Medico" value="<%= _.escape(item.get('nmMedico') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cpfMedicoInputContainer" class="control-group">
					<label class="control-label" for="cpfMedico">Cpf Medico</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cpfMedico" placeholder="Cpf Medico" value="<%= _.escape(item.get('cpfMedico') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="rgMedicoInputContainer" class="control-group">
					<label class="control-label" for="rgMedico">Rg Medico</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="rgMedico" placeholder="Rg Medico" value="<%= _.escape(item.get('rgMedico') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nrCrmInputContainer" class="control-group">
					<label class="control-label" for="nrCrm">Nr Crm</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nrCrm" placeholder="Nr Crm" value="<%= _.escape(item.get('nrCrm') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nmUsuarioInputContainer" class="control-group">
					<label class="control-label" for="nmUsuario">Nm Usuario</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nmUsuario" placeholder="Nm Usuario" value="<%= _.escape(item.get('nmUsuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="senhaInputContainer" class="control-group">
					<label class="control-label" for="senha">Senha</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="senha" placeholder="Senha" value="<%= _.escape(item.get('senha') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="numAcessoInputContainer" class="control-group">
					<label class="control-label" for="numAcesso">Num Acesso</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="numAcesso" placeholder="Num Acesso" value="<%= _.escape(item.get('numAcesso') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="laudoIdlaudoInputContainer" class="control-group">
					<label class="control-label" for="laudoIdlaudo">Laudo Idlaudo</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="laudoIdlaudo" placeholder="Laudo Idlaudo" value="<%= _.escape(item.get('laudoIdlaudo') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cdEspecialidadeInputContainer" class="control-group">
					<label class="control-label" for="cdEspecialidade">Cd Especialidade</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cdEspecialidade" placeholder="Cd Especialidade" value="<%= _.escape(item.get('cdEspecialidade') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<!-- delete button is is a separate form to prevent enter key from triggering a delete -->
		<form id="deleteMedicoButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteMedicoButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Delete Medico</button>
						<span id="confirmDeleteMedicoContainer" class="hide">
							<button id="cancelDeleteMedicoButton" class="btn btn-mini">Cancel</button>
							<button id="confirmDeleteMedicoButton" class="btn btn-mini btn-danger">Confirm</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- modal edit dialog -->
	<div class="modal hide fade" id="medicoDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Edit Medico
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="medicoModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancel</button>
			<button id="saveMedicoButton" class="btn btn-primary">Save Changes</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="medicoCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newMedicoButton" class="btn btn-primary">Add Medico</button>
	</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
