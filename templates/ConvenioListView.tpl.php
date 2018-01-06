<?php
	$this->assign('title','CONSULTÓRIO MÉDICO E ODONTOLÓGICO - CMO | Convenios');
	$this->assign('nav','convenios');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/convenios.js").wait(function(){
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
	<i class="icon-th-list"></i> Convenios
	<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Search..." />
		<button class='btn add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- underscore template for the collection -->
	<script type="text/template" id="convenioCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Idconvenio">Código<% if (page.orderBy == 'Idconvenio') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NmConvenio">Convênio<% if (page.orderBy == 'NmConvenio') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_DtInicio">Inicio<% if (page.orderBy == 'DtInicio') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_DsRegioes">Regioes<% if (page.orderBy == 'DsRegioes') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('idconvenio')) %>">
				<td><%= _.escape(item.get('idconvenio') || '') %></td>
				<td><%= _.escape(item.get('nmConvenio') || '') %></td>
				<td><%if (item.get('dtInicio')) { %><%= _date(app.parseDate(item.get('dtInicio'))).format('MMM D, YYYY') %><% } else { %>NULL<% } %></td>
				<td><%= _.escape(item.get('dsRegioes') || '') %></td>
			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<!-- underscore template for the model -->
	<script type="text/template" id="convenioModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idconvenioInputContainer" class="control-group">
					<label class="control-label" for="idconvenio">Idconvenio</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="idconvenio"><%= _.escape(item.get('idconvenio') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nmConvenioInputContainer" class="control-group">
					<label class="control-label" for="nmConvenio">Convenio</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nmConvenio" placeholder="Nome do Convenio" value="<%= _.escape(item.get('nmConvenio') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="dtInicioInputContainer" class="control-group">
					<label class="control-label" for="dtInicio">Inicio</label>
					<div class="controls inline-inputs">
						<div class="input-append date date-picker" data-date-format="dd-mm-yyyy">
							<input id="dtInicio" type="text" value="<%= _date(app.parseDate(item.get('dtInicio'))).format('DD-MM-YYYY') %>" />
							<span class="add-on"><i class="icon-calendar"></i></span>
						</div>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="dsRegioesInputContainer" class="control-group">
					<label class="control-label" for="dsRegioes">Regioes</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="dsRegioes" placeholder="Regioões de atendimento" value="<%= _.escape(item.get('dsRegioes') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<!-- delete button is is a separate form to prevent enter key from triggering a delete -->
		<form id="deleteConvenioButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteConvenioButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Delete Convênio</button>
						<span id="confirmDeleteConvenioContainer" class="hide">
							<button id="cancelDeleteConvenioButton" class="btn btn-mini">Cancela</button>
							<button id="confirmDeleteConvenioButton" class="btn btn-mini btn-danger">Confirma</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- modal edit dialog -->
	<div class="modal hide fade" id="convenioDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Editar Convênio
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="convenioModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancela</button>
			<button id="saveConvenioButton" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="convenioCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newConvenioButton" class="btn btn-primary">Adicionar Convênio</button>
	</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
