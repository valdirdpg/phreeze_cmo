<?php
/** @package    Clinicacmo::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * ConvenioMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the ConvenioDAO to the convenios datastore.
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
class ConvenioMap implements IDaoMap, IDaoMap2
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
			self::$FM["Idconvenio"] = new FieldMap("Idconvenio","convenios","idconvenio",true,FM_TYPE_INT,11,null,true);
			self::$FM["NmConvenio"] = new FieldMap("NmConvenio","convenios","nm_convenio",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["DtInicio"] = new FieldMap("DtInicio","convenios","dt_inicio",false,FM_TYPE_DATE,null,null,false);
			self::$FM["DsRegioes"] = new FieldMap("DsRegioes","convenios","ds_regioes",false,FM_TYPE_VARCHAR,45,null,false);
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