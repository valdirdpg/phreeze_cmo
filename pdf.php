<?php	

	include_once("conexao.php");
	$html = '';	
	
	
	
	$result_prontuario = "select * from pacientes inner join convenios c on c.idconvenio = cd_convenio";
	$resultado_prontuario= mysqli_query($conn, $result_prontuario);
	while($row_prontuario = mysqli_fetch_assoc($resultado_prontuario)){
		$html .= '<p>'.'<b>Código do Prontuário:</b>  '. $row_prontuario['idpacientes']  ."<br>";
		$html .= '<br>' .'<b>Nome:</b>  '.$row_prontuario['nm_paciente'] ."<br>";
		$html .= '<br>' .'<b>Convênio:</b>  '.$row_prontuario['nm_convenio'] ."<br>";
		$html .= '<br>' .'<b>Data de Nascimento:</b>  '. $row_prontuario['dt_Nascimento']   ."<br>";
		$html .= '<br>' .'<b>CPF:</b>  '.$row_prontuario['cpf'] ."<br>";
		$html .= '<br>' .'<b>RG:</b>  '.$row_prontuario['rg'] ."<br>";
		$html .= '<br>' .'<b>Sexo:</b>  '. $row_prontuario['sexo'] ."<br>";	
		$html .= '<br>' .'<b>Rua:</b>  '. $row_prontuario['end_rua']   ."<br>";
		$html .= '<br>' .'<b>Bairro:</b>  '. $row_prontuario['end_bairro']   ."<br>";
		$html .= '<br>' .'<b>Município:</b>  '.$row_prontuario['end_cidade']   ."<br>";
		$html .= '<br>' . "<b>REFERÊNCIAS</b>";	
	}
	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">CMO - Ficha Médica do Paciente</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>