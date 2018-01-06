<?php
/** @package    CONSULTÓRIO MÉDICO E ODONTOLÓGICO - CMO::Controller */

/** import supporting libraries */
require_once("AppBaseController.php");
require_once("Model/Especialidade.php");

/**
 * EspecialidadeController is the controller class for the Especialidade object.  The
 * controller is responsible for processing input from the user, reading/updating
 * the model as necessary and displaying the appropriate view.
 *
 * @package CONSULTÓRIO MÉDICO E ODONTOLÓGICO - CMO::Controller
 * @author ClassBuilder
 * @version 1.0
 */
class EspecialidadeController extends AppBaseController
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
	 * Displays a list view of Especialidade objects
	 */
	public function ListView()
	{
		$this->Render();
	}

	/**
	 * API Method queries for Especialidade records and render as JSON
	 */
	public function Query()
	{
		try
		{
			$criteria = new EspecialidadeCriteria();
			
			// TODO: this will limit results based on all properties included in the filter list 
			$filter = RequestUtil::Get('filter');
			if ($filter) $criteria->AddFilter(
				new CriteriaFilter('Idespecialidades,DsEspecialidades'
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

				$especialidades = $this->Phreezer->Query('Especialidade',$criteria)->GetDataPage($page, $pagesize);
				$output->rows = $especialidades->ToObjectArray(true,$this->SimpleObjectParams());
				$output->totalResults = $especialidades->TotalResults;
				$output->totalPages = $especialidades->TotalPages;
				$output->pageSize = $especialidades->PageSize;
				$output->currentPage = $especialidades->CurrentPage;
			}
			else
			{
				// return all results
				$especialidades = $this->Phreezer->Query('Especialidade',$criteria);
				$output->rows = $especialidades->ToObjectArray(true, $this->SimpleObjectParams());
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
	 * API Method retrieves a single Especialidade record and render as JSON
	 */
	public function Read()
	{
		try
		{
			$pk = $this->GetRouter()->GetUrlParam('idespecialidades');
			$especialidade = $this->Phreezer->Get('Especialidade',$pk);
			$this->RenderJSON($especialidade, $this->JSONPCallback(), true, $this->SimpleObjectParams());
		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method inserts a new Especialidade record and render response as JSON
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

			$especialidade = new Especialidade($this->Phreezer);

			// TODO: any fields that should not be inserted by the user should be commented out

			// this is an auto-increment.  uncomment if updating is allowed
			// $especialidade->Idespecialidades = $this->SafeGetVal($json, 'idespecialidades');

			$especialidade->DsEspecialidades = $this->SafeGetVal($json, 'dsEspecialidades');

			$especialidade->Validate();
			$errors = $especialidade->GetValidationErrors();

			if (count($errors) > 0)
			{
				$this->RenderErrorJSON('Please check the form for errors',$errors);
			}
			else
			{
				$especialidade->Save();
				$this->RenderJSON($especialidade, $this->JSONPCallback(), true, $this->SimpleObjectParams());
			}

		}
		catch (Exception $ex)
		{
			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method updates an existing Especialidade record and render response as JSON
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

			$pk = $this->GetRouter()->GetUrlParam('idespecialidades');
			$especialidade = $this->Phreezer->Get('Especialidade',$pk);

			// TODO: any fields that should not be updated by the user should be commented out

			// this is a primary key.  uncomment if updating is allowed
			// $especialidade->Idespecialidades = $this->SafeGetVal($json, 'idespecialidades', $especialidade->Idespecialidades);

			$especialidade->DsEspecialidades = $this->SafeGetVal($json, 'dsEspecialidades', $especialidade->DsEspecialidades);

			$especialidade->Validate();
			$errors = $especialidade->GetValidationErrors();

			if (count($errors) > 0)
			{
				$this->RenderErrorJSON('Please check the form for errors',$errors);
			}
			else
			{
				$especialidade->Save();
				$this->RenderJSON($especialidade, $this->JSONPCallback(), true, $this->SimpleObjectParams());
			}


		}
		catch (Exception $ex)
		{


			$this->RenderExceptionJSON($ex);
		}
	}

	/**
	 * API Method deletes an existing Especialidade record and render response as JSON
	 */
	public function Delete()
	{
		try
		{
						
			// TODO: if a soft delete is prefered, change this to update the deleted flag instead of hard-deleting

			$pk = $this->GetRouter()->GetUrlParam('idespecialidades');
			$especialidade = $this->Phreezer->Get('Especialidade',$pk);

			$especialidade->Delete();

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
