<?php
/** @package    Cmo::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Paciente object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Cmo::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class PacienteReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `pacientes` table
	public $CustomFieldExample;

	public $Idpacientes;
	public $NmPaciente;
	public $DtNascimento;
	public $Sexo;
	public $Cpf;
	public $Rg;
	public $Profissao;
	public $NmPai;
	public $NmMae;
	public $NrCarteira;
	public $EndRua;
	public $EndBairro;
	public $EndCidade;
	public $EndCep;
	public $EndUf;
	public $NrTelefone;
	public $NrCelular;
	public $CtEmail;
	public $Senha;
	public $Usuario;
	public $CdConvenio;
	public $CdLaudo;
	public $CdProntuario;
	public $Idade;

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
			,`pacientes`.`idpacientes` as Idpacientes
			,`pacientes`.`nm_paciente` as NmPaciente
			,`pacientes`.`dt_Nascimento` as DtNascimento
			,`pacientes`.`sexo` as Sexo
			,`pacientes`.`cpf` as Cpf
			,`pacientes`.`rg` as Rg
			,`pacientes`.`profissao` as Profissao
			,`pacientes`.`nm_pai` as NmPai
			,`pacientes`.`nm_mae` as NmMae
			,`pacientes`.`nr_carteira` as NrCarteira
			,`pacientes`.`end_rua` as EndRua
			,`pacientes`.`end_bairro` as EndBairro
			,`pacientes`.`end_cidade` as EndCidade
			,`pacientes`.`end_cep` as EndCep
			,`pacientes`.`end_uf` as EndUf
			,`pacientes`.`nr_telefone` as NrTelefone
			,`pacientes`.`nr_celular` as NrCelular
			,`pacientes`.`ct_email` as CtEmail
			,`pacientes`.`senha` as Senha
			,`pacientes`.`usuario` as Usuario
			,`pacientes`.`cd_convenio` as CdConvenio
			,`pacientes`.`cd_laudo` as CdLaudo
			,`pacientes`.`cd_prontuario` as CdProntuario
			,`pacientes`.`idade` as Idade
		from `pacientes`";

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
		$sql = "select count(1) as counter from `pacientes`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>