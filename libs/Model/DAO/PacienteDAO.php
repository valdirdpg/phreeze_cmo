<?php
/** @package Clinicacmo::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("PacienteMap.php");

/**
 * PacienteDAO provides object-oriented access to the pacientes table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Clinicacmo::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class PacienteDAO extends Phreezable
{
	/** @var int */
	public $Idpacientes;

	/** @var string */
	public $NmPaciente;

	/** @var date */
	public $DtNascimento;

	/** @var string */
	public $Sexo;

	/** @var string */
	public $Cpf;

	/** @var string */
	public $Rg;

	/** @var string */
	public $Profissao;

	/** @var string */
	public $NmPai;

	/** @var string */
	public $NmMae;

	/** @var int */
	public $NrCarteira;

	/** @var string */
	public $EndRua;

	/** @var string */
	public $EndBairro;

	/** @var string */
	public $EndCidade;

	/** @var int */
	public $EndCep;

	/** @var string */
	public $EndUf;

	/** @var string */
	public $NrTelefone;

	/** @var string */
	public $NrCelular;

	/** @var string */
	public $CtEmail;

	/** @var string */
	public $Senha;

	/** @var string */
	public $Usuario;

	/** @var int */
	public $CdConvenio;

	/** @var int */
	public $CdLaudo;

	/** @var int */
	public $Idade;

	/** @var int */
	public $CdProntuario;



}
?>