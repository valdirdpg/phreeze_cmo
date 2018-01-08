<?php
	$this->assign('title','CONSULTÓRIO MÉDICO E ODONTOLÓGICO - CMO | Home');
	$this->assign('nav','home');

	$this->display('_Header.tpl.php');
?>
	
	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
		     <h2>Localiza Prontuário Médico do Paciente</h2><br><br>
			<form action="../clinicacmo/fichaMedica.php" method="post">
			<b>Código do Prontuário<b style="margin-left: 6%"><input name="prontuario" required="true" type="number" id="prontuario" /><br><br>
			<p id="newButtonContainer" class="buttonContainer">
				<button id="" class="btn btn-primary" type="submite">Imprimir Ficha</button>
			</p>
			</form>
		</div>
			

	</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>