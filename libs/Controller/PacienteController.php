<?php
/** @package    CLÍNICA MÉDICA E ODONTOLÓGICA - CMO::Controller */

/** import supporting libraries */
require_once("AppBaseController.php");
require_once("Model/Paciente.php");

/**
 * PacienteController is the controller class for the Paciente object.  The
 * controller is responsible for processing input from the user, reading/updating
 * the model as necessary and displaying the appropriate view.
 *
 * @package CLÍNICA MÉDICA E ODONTOLÓGICA - CMO::Controller
 * @author ClassBuilder
 * @version 1.0
 */
class PacienteController extends AppBaseController
{

	/**
	 * Override here for any controller-specific functionality
	 *
	 * @inheritdocs
	 */
	protected function Init()
	{
		parent::Init();

		// TODO: add controller-wide bootstrap code
		
		// TODO: if authentiation is required for this entire controller, for example:
		// $this->RequirePermission(ExampleUser::$PERMISSION_USER,'SecureExample.LoginForm');
	}

	/**
	 * Displays a list view of Paciente objects
	 */
	public function ListView()
	{
		$this->Render();
	}

	/**
	 * API Method queries for Paciente records and render as JSON
	 */
	public function Query()
	{
		try
		{
			$criteria = new PacienteCriteria();
			
			// TODO: this will limit results based on all properties included in the filter list 
			$filter = RequestUtil::Get('filter');
			if ($filter) $criteria->AddFilter(
				new CriteriaFilter('Idpacientes,NmPaciente,DtNascimento,Sexo,Cpf,Rg,Profissao,NmPai,NmMae,NrCarteira,EndRua,EndBairro,EndCidade,EndCep,EndUf,NrTelefone,NrCelular,CtEmail,Senha,Usuario,CdConvenio,CdLaudo,Idade,CdProntuario'
				, '%'.$filter.'%')
			);

			// TODO: this is generic query filtering based only on criteria properties
			foreach (array_keys($_REQUEST) as $prop)
			{
				$prop_normal = ucfirst($prop);
				$prop_equals = $prop_normal.'_Equals';

				if (property_exists($criteria, $prop_normal))
				{
					$criteria->$prop_normal = RequestUtil::Get($prop);
				}
				elseif (property_exists($criteria, $prop_equals))
				{
					// this is a convenience so that the _Equals suffix is not needed
					$criteria->$prop_equals = RequestUtil::Get($prop);
				}
			}

			$output = new stdClass();

			// if a sort order was specified then specify in the criteria
 			$output->orderBy = RequestUtil::Get('orderBy');
 			$output->orderDesc = RequestUtil::Get('orderDesc') != '';
 			if ($output->orderBy) $criteria->SetOrder($output->orderBy, $output->orderDesc);

			$page = RequestUtil::Get('page');

			if ($page != '')
			{
				// if page is specified, use this instead (at the expense of one extra count query)
				$pagesize = $this->GetDefaultPageSize();

				$pacientes = $this->Phreezer->Query('Paciente',$criteria)->GetDataPage($page, $pagesize);
				$output->rows = $pacientes->ToObjectArray(true,$this->SimpleObjectParams());
				$output->totalResults = $pacientes->TotalResults;
				$output->totalPages = $pacientes->TotalPages;
				$output->pageSize = $pacientes->PageSize;
				$output->currentPage = $pacientes->CurrentPage;
			}
			else
			{
				// return all results
				$pacientes = $this->Phreezer->Query('Paciente',$criteria);
				$output->rows = $pacientes->ToObjectArray(true, $this->SimpleObjectParams());
				$output->totalResults = count($output->rows);
				$output->totalPages = 1;
				$output->pageSize = $output->totalResults;
				$output->currentPage = 1;
			}


			$this->RenderJSON($output, $this->JSONPCallback());
		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method retrieves a single Paciente record and render as JSON
	 */
	public function Read()
	{
		try
		{
			$pk = $this->GetRouter()->GetUrlParam('idpacientes');
			$paciente = $this->Phreezer->Get('Paciente',$pk);
			$this->RenderJSON($paciente, $this->JSONPCallback(), true, $this->SimpleObjectParams());
		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method inserts a new Paciente record and render response as JSON
	 */
	public function Create()
	{
		try
		{
						
			$json = json_decode(RequestUtil::GetBody());

			if (!$json)
			{
				throw new Exception('The request body does not contain valid JSON');
			}

			$paciente = new Paciente($this->Phreezer);

			// TODO: any fields that should not be inserted by the user should be commented out

			// this is an auto-increment.  uncomment if updating is allowed
			// $paciente->Idpacientes = $this->SafeGetVal($json, 'idpacientes');

			$paciente->NmPaciente = $this->SafeGetVal($json, 'nmPaciente');
			$paciente->DtNascimento = date('Y-m-d H:i:s',strtotime($this->SafeGetVal($json, 'dtNascimento')));
			$paciente->Sexo = $this->SafeGetVal($json, 'sexo');
			$paciente->Cpf = $this->SafeGetVal($json, 'cpf');
			$paciente->Rg = $this->SafeGetVal($json, 'rg');
			$paciente->Profissao = $this->SafeGetVal($json, 'profissao');
			$paciente->NmPai = $this->SafeGetVal($json, 'nmPai');
			$paciente->NmMae = $this->SafeGetVal($json, 'nmMae');
			$paciente->NrCarteira = $this->SafeGetVal($json, 'nrCarteira');
			$paciente->EndRua = $this->SafeGetVal($json, 'endRua');
			$paciente->EndBairro = $this->SafeGetVal($json, 'endBairro');
			$paciente->EndCidade = $this->SafeGetVal($json, 'endCidade');
			$paciente->EndCep = $this->SafeGetVal($json, 'endCep');
			$paciente->EndUf = $this->SafeGetVal($json, 'endUf');
			$paciente->NrTelefone = $this->SafeGetVal($json, 'nrTelefone');
			$paciente->NrCelular = $this->SafeGetVal($json, 'nrCelular');
			$paciente->CtEmail = $this->SafeGetVal($json, 'ctEmail');
			$paciente->Senha = $this->SafeGetVal($json, 'senha');
			$paciente->Usuario = $this->SafeGetVal($json, 'usuario');
			$paciente->CdConvenio = $this->SafeGetVal($json, 'cdConvenio');
			$paciente->CdLaudo = $this->SafeGetVal($json, 'cdLaudo');
			$paciente->Idade = $this->SafeGetVal($json, 'idade');
			$paciente->CdProntuario = $this->SafeGetVal($json, 'cdProntuario');

			$paciente->Validate();
			$errors = $paciente->GetValidationErrors();

			if (count($errors) > 0)
			{
				$this->RenderErrorJSON('Please check the form for errors',$errors);
			}
			else
			{
				$paciente->Save();
				$this->RenderJSON($paciente, $this->JSONPCallback(), true, $this->SimpleObjectParams());
			}

		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method updates an existing Paciente record and render response as JSON
	 */
	public function Update()
	{
		try
		{
						
			$json = json_decode(RequestUtil::GetBody());

			if (!$json)
			{
				throw new Exception('The request body does not contain valid JSON');
			}

			$pk = $this->GetRouter()->GetUrlParam('idpacientes');
			$paciente = $this->Phreezer->Get('Paciente',$pk);

			// TODO: any fields that should not be updated by the user should be commented out

			// this is a primary key.  uncomment if updating is allowed
			// $paciente->Idpacientes = $this->SafeGetVal($json, 'idpacientes', $paciente->Idpacientes);

			$paciente->NmPaciente = $this->SafeGetVal($json, 'nmPaciente', $paciente->NmPaciente);
			$paciente->DtNascimento = date('Y-m-d H:i:s',strtotime($this->SafeGetVal($json, 'dtNascimento', $paciente->DtNascimento)));
			$paciente->Sexo = $this->SafeGetVal($json, 'sexo', $paciente->Sexo);
			$paciente->Cpf = $this->SafeGetVal($json, 'cpf', $paciente->Cpf);
			$paciente->Rg = $this->SafeGetVal($json, 'rg', $paciente->Rg);
			$paciente->Profissao = $this->SafeGetVal($json, 'profissao', $paciente->Profissao);
			$paciente->NmPai = $this->SafeGetVal($json, 'nmPai', $paciente->NmPai);
			$paciente->NmMae = $this->SafeGetVal($json, 'nmMae', $paciente->NmMae);
			$paciente->NrCarteira = $this->SafeGetVal($json, 'nrCarteira', $paciente->NrCarteira);
			$paciente->EndRua = $this->SafeGetVal($json, 'endRua', $paciente->EndRua);
			$paciente->EndBairro = $this->SafeGetVal($json, 'endBairro', $paciente->EndBairro);
			$paciente->EndCidade = $this->SafeGetVal($json, 'endCidade', $paciente->EndCidade);
			$paciente->EndCep = $this->SafeGetVal($json, 'endCep', $paciente->EndCep);
			$paciente->EndUf = $this->SafeGetVal($json, 'endUf', $paciente->EndUf);
			$paciente->NrTelefone = $this->SafeGetVal($json, 'nrTelefone', $paciente->NrTelefone);
			$paciente->NrCelular = $this->SafeGetVal($json, 'nrCelular', $paciente->NrCelular);
			$paciente->CtEmail = $this->SafeGetVal($json, 'ctEmail', $paciente->CtEmail);
			$paciente->Senha = $this->SafeGetVal($json, 'senha', $paciente->Senha);
			$paciente->Usuario = $this->SafeGetVal($json, 'usuario', $paciente->Usuario);
			$paciente->CdConvenio = $this->SafeGetVal($json, 'cdConvenio', $paciente->CdConvenio);
			$paciente->CdLaudo = $this->SafeGetVal($json, 'cdLaudo', $paciente->CdLaudo);
			$paciente->Idade = $this->SafeGetVal($json, 'idade', $paciente->Idade);
			$paciente->CdProntuario = $this->SafeGetVal($json, 'cdProntuario', $paciente->CdProntuario);

			$paciente->Validate();
			$errors = $paciente->GetValidationErrors();

			if (count($errors) > 0)
			{
				$this->RenderErrorJSON('Please check the form for errors',$errors);
			}
			else
			{
				$paciente->Save();
				$this->RenderJSON($paciente, $this->JSONPCallback(), true, $this->SimpleObjectParams());
			}


		}
		catch (Exception $ex)
		{


			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method deletes an existing Paciente record and render response as JSON
	 */
	public function Delete()
	{
		try
		{
						
			// TODO: if a soft delete is prefered, change this to update the deleted flag instead of hard-deleting

			$pk = $this->GetRouter()->GetUrlParam('idpacientes');
			$paciente = $this->Phreezer->Get('Paciente',$pk);

			$paciente->Delete();

			$output = new stdClass();

			$this->RenderJSON($output, $this->JSONPCallback());

		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}
}

?>
