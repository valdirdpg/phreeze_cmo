<?php
/** @package    Cmo::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * PacienteMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the PacienteDAO to the pacientes datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Cmo::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class PacienteMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["Idpacientes"] = new FieldMap("Idpacientes","pacientes","idpacientes",true,FM_TYPE_INT,11,null,true);
			self::$FM["NmPaciente"] = new FieldMap("NmPaciente","pacientes","nm_paciente",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["DtNascimento"] = new FieldMap("DtNascimento","pacientes","dt_Nascimento",false,FM_TYPE_DATE,null,null,false);
			self::$FM["Sexo"] = new FieldMap("Sexo","pacientes","sexo",false,FM_TYPE_VARCHAR,10,null,false);
			self::$FM["Cpf"] = new FieldMap("Cpf","pacientes","cpf",false,FM_TYPE_VARCHAR,11,null,false);
			self::$FM["Rg"] = new FieldMap("Rg","pacientes","rg",false,FM_TYPE_VARCHAR,11,null,false);
			self::$FM["Profissao"] = new FieldMap("Profissao","pacientes","profissao",false,FM_TYPE_VARCHAR,40,null,false);
			self::$FM["NmPai"] = new FieldMap("NmPai","pacientes","nm_pai",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["NmMae"] = new FieldMap("NmMae","pacientes","nm_mae",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["NrCarteira"] = new FieldMap("NrCarteira","pacientes","nr_carteira",false,FM_TYPE_BIGINT,25,null,false);
			self::$FM["EndRua"] = new FieldMap("EndRua","pacientes","end_rua",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["EndBairro"] = new FieldMap("EndBairro","pacientes","end_bairro",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["EndCidade"] = new FieldMap("EndCidade","pacientes","end_cidade",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["EndCep"] = new FieldMap("EndCep","pacientes","end_cep",false,FM_TYPE_INT,8,null,false);
			self::$FM["EndUf"] = new FieldMap("EndUf","pacientes","end_uf",false,FM_TYPE_VARCHAR,2,null,false);
			self::$FM["NrTelefone"] = new FieldMap("NrTelefone","pacientes","nr_telefone",false,FM_TYPE_VARCHAR,12,null,false);
			self::$FM["NrCelular"] = new FieldMap("NrCelular","pacientes","nr_celular",false,FM_TYPE_VARCHAR,13,null,false);
			self::$FM["CtEmail"] = new FieldMap("CtEmail","pacientes","ct_email",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["Senha"] = new FieldMap("Senha","pacientes","senha",false,FM_TYPE_VARCHAR,8,null,false);
			self::$FM["Usuario"] = new FieldMap("Usuario","pacientes","usuario",false,FM_TYPE_VARCHAR,15,null,false);
			self::$FM["CdConvenio"] = new FieldMap("CdConvenio","pacientes","cd_convenio",false,FM_TYPE_INT,11,null,false);
			self::$FM["CdLaudo"] = new FieldMap("CdLaudo","pacientes","cd_laudo",false,FM_TYPE_INT,11,null,false);
			self::$FM["CdProntuario"] = new FieldMap("CdProntuario","pacientes","cd_prontuario",false,FM_TYPE_INT,11,null,false);
			self::$FM["Idade"] = new FieldMap("Idade","pacientes","idade",false,FM_TYPE_INT,3,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
		}
		return self::$KM;
	}

}

?>