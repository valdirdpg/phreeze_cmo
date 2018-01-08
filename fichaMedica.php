<?php	

		include_once("conexao.php");
		$html = '<meta http-equiv="content-type" content="text/html;charset=utf-8" />';	
	    $prontuario = $_POST["prontuario"];
	    $cont = 0;
		$result_prontuario = "select * from pacientes inner join convenios c on c.idconvenio = cd_convenio where cd_prontuario = $prontuario";
		$resultado_prontuario= mysqli_query($conn, $result_prontuario);
		while($row_prontuario = mysqli_fetch_assoc($resultado_prontuario)){
		    $cont++;
			$html .= '<p>'.'<b>Código do Prontuário:</b>  '. $row_prontuario['idpacientes']  ."<br>";
			$html .= '<table border="0.1px" width="100%">';
			$html .= '<tr><td width="60%">' .'<b>Nome:</b> '.$row_prontuario['nm_paciente'] .'</td>'. '<td width="40%"><b>Idade:</b>  '
			. $row_prontuario['idade']	.'</td></tr>';
			$html .= '<tr><td width="60%">' .'<b>RG:</b>  '.$row_prontuario['rg'] .'</td>'.'<td width ="40%"><b>Data de Nascimento:</b>  '
			. date('d-m-Y', strtotime($row_prontuario['dt_Nascimento'])) .'</td></tr>';
			
			if(($row_prontuario['nr_telefone']!= '') && ($row_prontuario['nr_celular']== '')){			 
				$html .= '<tr><td width="60%">'  .'<b>CPF:</b> '.$row_prontuario['cpf'].'</td>'
				.'<td whidth ="40%"><b>Telefone:</b>  ' . $row_prontuario['nr_telefone'] .'</td></tr>';
			}
			else if(($row_prontuario['nr_telefone']== '') && ($row_prontuario['nr_celular']!= '')){
				$html .= '<tr><td width="60%">'  .'<b>CPF:</b> '.$row_prontuario['cpf'].'</td>'
				.'<b><td width="40%">Celular:</b>  ' . $row_prontuario['nr_celular'] .'</td></tr>';
			}
			
			else if(($row_prontuario['nr_telefone']!= '') && ($row_prontuario['nr_celular']!= '')){
				$html .= '<tr><td width="60%">'  .'<b>CPF:</b> '.$row_prontuario['cpf'].'</td>'
				.'<td width="40%"> <b>Telefones:</b> ' . $row_prontuario['nr_celular'] .' / '.$row_prontuario['nr_telefone'] .'</td></tr>';
			}
			else {
				$html .= '<tr><td width="60%">'  .'<b>CPF:</b> '.$row_prontuario['cpf'].'</td>'
				.'<td width = "40%"><b>Telefone para contato:</b>'  .'</tr></td>';
			}
			$html .= '<tr><td width="60%">' .'<b>Convênio:</b>  '.$row_prontuario['nm_convenio'] . '</td>' 
			.'<td width="40%"><b>Sexo:</b>  '. $row_prontuario['sexo'] .'</td></tr>';			
			 
			$html .= '<tr><td width="60%" colspan="2">' .'<b>Endereço:</b> Rua/Av.  '. $row_prontuario['end_rua']. ', '. $row_prontuario['end_bairro']  
			.',  '.$row_prontuario['end_cidade']   ."</td></tr>";
			$html .='</table>';
			$html .='<table width="100%" border="0.1px"> <tr><td>';
			$html .= '<br>' . "<b style='margin-left: 40%;'>REFERÊNCIAS</b>"."<br>";	
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .= '<br>'.'_________________________________________________________________________________________';
			$html .='</td></tr></table>' ;
			 
	}
	 
	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	if($cont > 0){
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
	}else{
		echo  "<script>confirm('O prontuario não foi localizado na base de dados, tente novamente!');";
		echo "javascript:window.location='./';</script>";
	}
?>