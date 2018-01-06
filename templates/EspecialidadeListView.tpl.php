<?php
	$this->assign('title','CONSULTÓRIO MÉDICO E ODONTOLÓGICO - CMO | Especialidades');
	$this->assign('nav','especialidades');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/especialidades.js").wait(function(){
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
	<i class="icon-th-list"></i> Especialidades
	<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Search..." />
		<button class='btn add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- underscore template for the collection -->
	<script type="text/template" id="especialidadeCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Idespecialidades">Código<% if (page.orderBy == 'Idespecialidades') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_DsEspecialidades">Especialidades<% if (page.orderBy == 'DsEspecialidades') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('idespecialidades')) %>">
				<td><%= _.escape(item.get('idespecialidades') || '') %></td>
				<td><%= _.escape(item.get('dsEspecialidades') || '') %></td>
			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<!-- underscore template for the model -->
	<script type="text/template" id="especialidadeModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idespecialidadesInputContainer" class="control-group">
					<label class="control-label" for="idespecialidades">Idespecialidades</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="idespecialidades"><%= _.escape(item.get('idespecialidades') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="dsEspecialidadesInputContainer" class="control-group">
					<label class="control-label" for="dsEspecialidades">Especialidades</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="dsEspecialidades" placeholder="Nome da Especialidade" value="<%= _.escape(item.get('dsEspecialidades') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<!-- delete button is is a separate form to prevent enter key from triggering a delete -->
		<form id="deleteEspecialidadeButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteEspecialidadeButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Delete Especialidade</button>
						<span id="confirmDeleteEspecialidadeContainer" class="hide">
							<button id="cancelDeleteEspecialidadeButton" class="btn btn-mini">Cancelar</button>
							<button id="confirmDeleteEspecialidadeButton" class="btn btn-mini btn-danger">Confirmar</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- modal edit dialog -->
	<div class="modal hide fade" id="especialidadeDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Editar Especialidade
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="especialidadeModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button id="saveEspecialidadeButton" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="especialidadeCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newEspecialidadeButton" class="btn btn-primary">Adicionar Especialidade</button>
	</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
