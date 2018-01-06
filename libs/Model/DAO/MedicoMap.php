<?php
/** @package    Clinicacmo::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * MedicoMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the MedicoDAO to the medicos datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Clinicacmo::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class MedicoMap implements IDaoMap, IDaoMap2
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
			self::$FM["Idmedicos"] = new FieldMap("Idmedicos","medicos","idmedicos",true,FM_TYPE_INT,11,null,true);
			self::$FM["NmMedico"] = new FieldMap("NmMedico","medicos","nm_medico",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["CpfMedico"] = new FieldMap("CpfMedico","medicos","cpf_medico",false,FM_TYPE_INT,11,null,false);
			self::$FM["RgMedico"] = new FieldMap("RgMedico","medicos","rg_medico",false,FM_TYPE_INT,11,null,false);
			self::$FM["NrCrm"] = new FieldMap("NrCrm","medicos","nr_crm",false,FM_TYPE_INT,11,null,false);
			self::$FM["NmUsuario"] = new FieldMap("NmUsuario","medicos","nm_usuario",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["Senha"] = new FieldMap("Senha","medicos","senha",false,FM_TYPE_VARCHAR,8,null,false);
			self::$FM["NumAcesso"] = new FieldMap("NumAcesso","medicos","num_acesso",false,FM_TYPE_INT,11,null,false);
			self::$FM["LaudoIdlaudo"] = new FieldMap("LaudoIdlaudo","medicos","laudo_idlaudo",false,FM_TYPE_INT,11,null,false);
			self::$FM["CdEspecialidade"] = new FieldMap("CdEspecialidade","medicos","cd_especialidade",false,FM_TYPE_INT,11,null,false);
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