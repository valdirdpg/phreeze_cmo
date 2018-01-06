<?php
/** @package    Cmo::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Medico object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Cmo::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class MedicoReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `medicos` table
	public $CustomFieldExample;

	public $Idmedicos;
	public $NmMedico;
	public $CpfMedico;
	public $RgMedico;
	public $NrCrm;
	public $NmUsuario;
	public $Senha;
	public $NumAcesso;
	public $LaudoIdlaudo;
	public $CdEspecialidade;

	/*
	* GetCustomQuery returns a fully formed SQL statement.  The result columns
	* must match with the properties of this reporter object.
	*
	* @see Reporter::GetCustomQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomQuery($criteria)
	{
		$sql = "select
			'custom value here...' as CustomFieldExample
			,`medicos`.`idmedicos` as Idmedicos
			,`medicos`.`nm_medico` as NmMedico
			,`medicos`.`cpf_medico` as CpfMedico
			,`medicos`.`rg_medico` as RgMedico
			,`medicos`.`nr_crm` as NrCrm
			,`medicos`.`nm_usuario` as NmUsuario
			,`medicos`.`senha` as Senha
			,`medicos`.`num_acesso` as NumAcesso
			,`medicos`.`laudo_idlaudo` as LaudoIdlaudo
			,`medicos`.`cd_especialidade` as CdEspecialidade
		from `medicos`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();
		$sql .= $criteria->GetOrder();

		return $sql;
	}
	
	/*
	* GetCustomCountQuery returns a fully formed SQL statement that will count
	* the results.  This query must return the correct number of results that
	* GetCustomQuery would, given the same criteria
	*
	* @see Reporter::GetCustomCountQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomCountQuery($criteria)
	{
		$sql = "select count(1) as counter from `medicos`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>