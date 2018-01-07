<?php	

		include_once("conexao.php");
		$html = '<meta http-equiv="content-type" content="text/html;charset=utf-8" />';	
	
	
	
		$result_prontuario = "select * from pacientes inner join convenios c on c.idconvenio = cd_convenio";
		$resultado_prontuario= mysqli_query($conn, $result_prontuario);
		while($row_prontuario = mysqli_fetch_assoc($resultado_prontuario)){
		
		$html .= '<p>'.'<b>Código do Prontuário:</b>  '. $row_prontuario['idpacientes']  ."<br>";
		$html .= '<br>' .'<b>Nome:</b>  '.$row_prontuario['nm_paciente'] .'<b style="margin-left: 7%; posit">Idade:</b>  '
		. $row_prontuario['idade']	."<br>";
		$html .= '<br>' .'<b>RG:</b>  '.$row_prontuario['rg'] .'<b style="margin-left: 25%;">Data de Nascimento:</b>  '
		. date('d-m-Y', strtotime($row_prontuario['dt_Nascimento'])) .'<br>';
		
		if(($row_prontuario['nr_telefone']!= '') && ($row_prontuario['nr_celular']== '')){
			$html .= '<br>' .'<b>CPF:</b> '.$row_prontuario['cpf'] 
			.'<b style="margin-left: 23%;">Telefone:</b>  ' . $row_prontuario['nr_telefone'] .'<br>';
		}
		else if(($row_prontuario['nr_telefone']== '') && ($row_prontuario['nr_celular']!= '')){
			$html .= '<br>' .'<b>CPF:</b> '.$row_prontuario['cpf'] 
			.'<b style="margin-left: 23%;">Celular:</b>  ' . $row_prontuario['nr_celular'] .'<br>';
		}
		
		else if(($row_prontuario['nr_telefone']!= '') && ($row_prontuario['nr_celular']!= '')){
			$html .= '<br>' .'<b>CPF:</b> '.$row_prontuario['cpf'] 
			.'<b style="margin-left: 23%;">Telefones:</b>  ' . $row_prontuario['nr_celular'] .' / '.$row_prontuario['nr_telefone'] .'<br>';
		}
		else {
			$html .= '<br>' .'<b>CPF:</b> '.$row_prontuario['cpf'] 
			.'<b style="margin-left: 23%;">Telefone para contato:</b>'  .'<br>';
		}
		$html .= '<br>' .'<b>Convênio:</b>  '.$row_prontuario['nm_convenio'] 
		.'<b style="margin-left: 22%;">Sexo:</b>  '. $row_prontuario['sexo'] ."<br>";			
		 
		$html .= '<br>' .'<b>Endereço:</b> Rua/Av.  '. $row_prontuario['end_rua']. ', '. $row_prontuario['end_bairro']  
		.',  '.$row_prontuario['end_cidade']   ."<br><br>";
		
		$html .= '<br>' . "<b style='margin-left: 40%;'>REFERÊNCIAS</b>"."<br>";	
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
		$html .= '<br>'.'___________________________________________________________________________________________';
	}
	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h3 style="text-align: center;">CMO - Ficha Médica do Paciente</h3>
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