<?php
	$this->assign('title','CONSULTÓRIO MÉDICO E ODONTOLÓGICO - CMO | Pacientes');
	$this->assign('nav','pacientes');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/pacientes.js").wait(function(){
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
	<i class="icon-th-list"></i> Pacientes
	<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Busca..." />
		<button class='btn add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- underscore template for the collection -->
	<script type="text/template" id="pacienteCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Idpacientes">Código da Ficha<% if (page.orderBy == 'Idpacientes') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NmPaciente">Nome<% if (page.orderBy == 'NmPaciente') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_DtNascimento">Data de Nascimento<% if (page.orderBy == 'DtNascimento') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Sexo">Sexo<% if (page.orderBy == 'Sexo') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_CpfPaciente">CPF <% if (page.orderBy == 'CpfPaciente') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
<!-- UNCOMMENT TO SHOW ADDITIONAL COLUMNS
				<th id="header_RgPaciente">RG<% if (page.orderBy == 'RgPaciente') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Profissao">Profissao<% if (page.orderBy == 'Profissao') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>				
				<th id="header_NmPai">Nome do Pai<% if (page.orderBy == 'NmPai') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NmMae">Nome da Mãe<% if (page.orderBy == 'NmMae') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NrCarteira">Nº da Carteira<% if (page.orderBy == 'NrCarteira') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_EndRua">Rua<% if (page.orderBy == 'EndRua') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_EndBairro"Bairro<% if (page.orderBy == 'EndBairro') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_EndCidade">Cidade<% if (page.orderBy == 'EndCidade') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_EndCep">Cep<% if (page.orderBy == 'EndCep') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_EndUf">Uf<% if (page.orderBy == 'EndUf') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NrTelefone">Telefone<% if (page.orderBy == 'NrTelefone') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_NrCelular">Celular<% if (page.orderBy == 'NrCelular') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_CtEmail">E-mail<% if (page.orderBy == 'CtEmail') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Senha">Senha<% if (page.orderBy == 'Senha') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Usuario">Usuario<% if (page.orderBy == 'Usuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_CdConvenio">Código do Convenio<% if (page.orderBy == 'CdConvenio') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_CdLaudo">Código do Laudo<% if (page.orderBy == 'CdLaudo') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_CdProntuario">Código do Prontuário<% if (page.orderBy == 'CdProntuario') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Idade">Idade<% if (page.orderBy == 'Idade') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
-->
			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('idpacientes')) %>">
				<td><%= _.escape(item.get('idpacientes') || '') %></td>
				<td><%= _.escape(item.get('nmPaciente') || '') %></td>
				<td><%if (item.get('dtNascimento')) { %><%= _date(app.parseDate(item.get('dtNascimento'))).format('D MMM , YYYY') %><% } else { %>NULL<% } %></td>
				<td><%= _.escape(item.get('sexo') || '') %></td>
				<td><%= _.escape(item.get('cpf') || '') %></td>
<!-- UNCOMMENT TO SHOW ADDITIONAL COLUMNS
				<td><%= _.escape(item.get('rg') || '') %></td>
				<td><%= _.escape(item.get('profissao') || '') %></td>
				<td><%= _.escape(item.get('nmPai') || '') %></td>
				<td><%= _.escape(item.get('nmMae') || '') %></td>
				<td><%= _.escape(item.get('nrCarteira') || '') %></td>
				<td><%= _.escape(item.get('endRua') || '') %></td>
				<td><%= _.escape(item.get('endBairro') || '') %></td>
				<td><%= _.escape(item.get('endCidade') || '') %></td>
				<td><%= _.escape(item.get('endCep') || '') %></td>
				<td><%= _.escape(item.get('endUf') || '') %></td>
				<td><%= _.escape(item.get('nrTelefone') || '') %></td>
				<td><%= _.escape(item.get('nrCelular') || '') %></td>
				<td><%= _.escape(item.get('ctEmail') || '') %></td>
				<td><%= _.escape(item.get('senha') || '') %></td>
				<td><%= _.escape(item.get('usuario') || '') %></td>
				<td><%= _.escape(item.get('cdConvenio') || '') %></td>
				<td><%= _.escape(item.get('cdLaudo') || '') %></td>
				<td><%= _.escape(item.get('cdProntuario') || '') %></td>
				<td><%= _.escape(item.get('Idade') || '') %></td>
-->
			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<!-- underscore template for the model -->
	<script type="text/template" id="pacienteModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idpacientesInputContainer" class="control-group">
					<label class="control-label" for="idpacientes">Código da Ficha</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="idpacientes"><%= _.escape(item.get('idpacientes') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nmPacienteInputContainer" class="control-group">
					<label class="control-label" for="nmPaciente">Nome</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nmPaciente" placeholder="Nome do Paciente" value="<%= _.escape(item.get('nmPaciente') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="dtNascimentoInputContainer" class="control-group">
					<label class="control-label" for="dtNascimento">Dt Nascimento</label>
					<div class="controls inline-inputs">
						<div class="input-append date " data-date-format="dd-mm-yyyy">
							<input id="dtNascimento" type="text" value="<%= _date(app.parseDate(item.get('dtNascimento'))).format('DD-MM-YYYY') %>" />
							<span class="add-on"><i class="icon-calendar"></i></span>
						</div>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="idadeInputContainer" class="control-group">
					<label class="control-label" for="idade">Idade</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="idade" placeholder="Idade" value="<%= _.escape(item.get('idade') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="sexoInputContainer" class="control-group">
					<label class="control-label" for="sexo">Sexo</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="sexo" placeholder="Sexo" value="<%= _.escape(item.get('sexo') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cpfInputContainer" class="control-group">
					<label class="control-label" for="cpf">Cpf</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cpf" placeholder="CPF" value="<%= _.escape(item.get('cpf') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="rgInputContainer" class="control-group">
					<label class="control-label" for="rg">Rg</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="rg" placeholder="RG" value="<%= _.escape(item.get('rg') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="profissaoInputContainer" class="control-group">
					<label class="control-label" for="profissao">Profissão</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="profissao" placeholder="Profissao" value="<%= _.escape(item.get('profissao') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nmPaiInputContainer" class="control-group">
					<label class="control-label" for="nmPai">Pai</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nmPai" placeholder="Nome do Pai" value="<%= _.escape(item.get('nmPai') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nmMaeInputContainer" class="control-group">
					<label class="control-label" for="nmMae">Mãe</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nmMae" placeholder="Nome da Mae" value="<%= _.escape(item.get('nmMae') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nrCarteiraInputContainer" class="control-group">
					<label class="control-label" for="nrCarteira">Cartão</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nrCarteira" placeholder="Número Convênio" value="<%= _.escape(item.get('nrCarteira') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="endRuaInputContainer" class="control-group">
					<label class="control-label" for="endRua">Rua</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="endRua" placeholder="Rua" value="<%= _.escape(item.get('endRua') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="endBairroInputContainer" class="control-group">
					<label class="control-label" for="endBairro">Bairro</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="endBairro" placeholder="Bairro" value="<%= _.escape(item.get('endBairro') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="endCidadeInputContainer" class="control-group">
					<label class="control-label" for="endCidade">Cidade</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="endCidade" placeholder="Cidade" value="<%= _.escape(item.get('endCidade') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="endCepInputContainer" class="control-group">
					<label class="control-label" for="endCep">Cep</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="endCep" placeholder="CEP" value="<%= _.escape(item.get('endCep') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="endUfInputContainer" class="control-group">
					<label class="control-label" for="endUf">Uf</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="endUf" placeholder="UF" value="<%= _.escape(item.get('endUf') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nrTelefoneInputContainer" class="control-group">
					<label class="control-label" for="nrTelefone">Telefone</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nrTelefone" placeholder="Telefone Fixo" value="<%= _.escape(item.get('nrTelefone') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nrCelularInputContainer" class="control-group">
					<label class="control-label" for="nrCelular">Celular</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nrCelular" placeholder="Celular" value="<%= _.escape(item.get('nrCelular') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="ctEmailInputContainer" class="control-group">
					<label class="control-label" for="ctEmail">E-mail</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="ctEmail" placeholder="Email" value="<%= _.escape(item.get('ctEmail') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="senhaInputContainer" class="control-group">
					<label class="control-label" for="senha">Senha</label>
					<div class="controls inline-inputs">
						<input type="password" class="input-xlarge" id="senha" placeholder="Senha" value="<%= _.escape(item.get('senha') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="usuarioInputContainer" class="control-group">
					<label class="control-label" for="usuario">Usuário</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="usuario" placeholder="Usuário" value="<%= _.escape(item.get('usuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cdConvenioInputContainer" class="control-group">
					<label class="control-label" for="cdConvenio">Convenio</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cdConvenio" placeholder="Código do Convênio" value="<%= _.escape(item.get('cdConvenio') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cdLaudoInputContainer" class="control-group">
					<label class="control-label" for="cdLaudo">Laudo</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cdLaudo" placeholder="Código do Laudo" value="<%= _.escape(item.get('cdLaudo') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="cdProntuarioInputContainer" class="control-group">
					<label class="control-label" for="cdProntuario">Prontuario</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="cdProntuario" placeholder="Código do Prontuario" value="<%= _.escape(item.get('cdProntuario') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				
			</fieldset>
		</form>

		<!-- delete button is is a separate form to prevent enter key from triggering a delete -->
		<form id="deletePacienteButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deletePacienteButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Delete Paciente</button>
						<span id="confirmDeletePacienteContainer" class="hide">
							<button id="cancelDeletePacienteButton" class="btn btn-mini">Cancelar</button>
							<button id="confirmDeletePacienteButton" class="btn btn-mini btn-danger">Confirmar</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- modal edit dialog -->
	<div class="modal hide fade" id="pacienteDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Editar Paciente
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="pacienteModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button id="savePacienteButton" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="pacienteCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newPacienteButton" class="btn btn-primary">Adicionar Paciente</button>
	</p>


</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
