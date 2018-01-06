<?php
/** @package    Cmo::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * MedicoCriteria allows custom querying for the Medico object.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the ModelCriteria class which is extended from this class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @inheritdocs
 * @package Cmo::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class MedicoCriteriaDAO extends Criteria
{

	public $Idmedicos_Equals;
	public $Idmedicos_NotEquals;
	public $Idmedicos_IsLike;
	public $Idmedicos_IsNotLike;
	public $Idmedicos_BeginsWith;
	public $Idmedicos_EndsWith;
	public $Idmedicos_GreaterThan;
	public $Idmedicos_GreaterThanOrEqual;
	public $Idmedicos_LessThan;
	public $Idmedicos_LessThanOrEqual;
	public $Idmedicos_In;
	public $Idmedicos_IsNotEmpty;
	public $Idmedicos_IsEmpty;
	public $Idmedicos_BitwiseOr;
	public $Idmedicos_BitwiseAnd;
	public $NmMedico_Equals;
	public $NmMedico_NotEquals;
	public $NmMedico_IsLike;
	public $NmMedico_IsNotLike;
	public $NmMedico_BeginsWith;
	public $NmMedico_EndsWith;
	public $NmMedico_GreaterThan;
	public $NmMedico_GreaterThanOrEqual;
	public $NmMedico_LessThan;
	public $NmMedico_LessThanOrEqual;
	public $NmMedico_In;
	public $NmMedico_IsNotEmpty;
	public $NmMedico_IsEmpty;
	public $NmMedico_BitwiseOr;
	public $NmMedico_BitwiseAnd;
	public $CpfMedico_Equals;
	public $CpfMedico_NotEquals;
	public $CpfMedico_IsLike;
	public $CpfMedico_IsNotLike;
	public $CpfMedico_BeginsWith;
	public $CpfMedico_EndsWith;
	public $CpfMedico_GreaterThan;
	public $CpfMedico_GreaterThanOrEqual;
	public $CpfMedico_LessThan;
	public $CpfMedico_LessThanOrEqual;
	public $CpfMedico_In;
	public $CpfMedico_IsNotEmpty;
	public $CpfMedico_IsEmpty;
	public $CpfMedico_BitwiseOr;
	public $CpfMedico_BitwiseAnd;
	public $RgMedico_Equals;
	public $RgMedico_NotEquals;
	public $RgMedico_IsLike;
	public $RgMedico_IsNotLike;
	public $RgMedico_BeginsWith;
	public $RgMedico_EndsWith;
	public $RgMedico_GreaterThan;
	public $RgMedico_GreaterThanOrEqual;
	public $RgMedico_LessThan;
	public $RgMedico_LessThanOrEqual;
	public $RgMedico_In;
	public $RgMedico_IsNotEmpty;
	public $RgMedico_IsEmpty;
	public $RgMedico_BitwiseOr;
	public $RgMedico_BitwiseAnd;
	public $NrCrm_Equals;
	public $NrCrm_NotEquals;
	public $NrCrm_IsLike;
	public $NrCrm_IsNotLike;
	public $NrCrm_BeginsWith;
	public $NrCrm_EndsWith;
	public $NrCrm_GreaterThan;
	public $NrCrm_GreaterThanOrEqual;
	public $NrCrm_LessThan;
	public $NrCrm_LessThanOrEqual;
	public $NrCrm_In;
	public $NrCrm_IsNotEmpty;
	public $NrCrm_IsEmpty;
	public $NrCrm_BitwiseOr;
	public $NrCrm_BitwiseAnd;
	public $NmUsuario_Equals;
	public $NmUsuario_NotEquals;
	public $NmUsuario_IsLike;
	public $NmUsuario_IsNotLike;
	public $NmUsuario_BeginsWith;
	public $NmUsuario_EndsWith;
	public $NmUsuario_GreaterThan;
	public $NmUsuario_GreaterThanOrEqual;
	public $NmUsuario_LessThan;
	public $NmUsuario_LessThanOrEqual;
	public $NmUsuario_In;
	public $NmUsuario_IsNotEmpty;
	public $NmUsuario_IsEmpty;
	public $NmUsuario_BitwiseOr;
	public $NmUsuario_BitwiseAnd;
	public $Senha_Equals;
	public $Senha_NotEquals;
	public $Senha_IsLike;
	public $Senha_IsNotLike;
	public $Senha_BeginsWith;
	public $Senha_EndsWith;
	public $Senha_GreaterThan;
	public $Senha_GreaterThanOrEqual;
	public $Senha_LessThan;
	public $Senha_LessThanOrEqual;
	public $Senha_In;
	public $Senha_IsNotEmpty;
	public $Senha_IsEmpty;
	public $Senha_BitwiseOr;
	public $Senha_BitwiseAnd;
	public $NumAcesso_Equals;
	public $NumAcesso_NotEquals;
	public $NumAcesso_IsLike;
	public $NumAcesso_IsNotLike;
	public $NumAcesso_BeginsWith;
	public $NumAcesso_EndsWith;
	public $NumAcesso_GreaterThan;
	public $NumAcesso_GreaterThanOrEqual;
	public $NumAcesso_LessThan;
	public $NumAcesso_LessThanOrEqual;
	public $NumAcesso_In;
	public $NumAcesso_IsNotEmpty;
	public $NumAcesso_IsEmpty;
	public $NumAcesso_BitwiseOr;
	public $NumAcesso_BitwiseAnd;
	public $LaudoIdlaudo_Equals;
	public $LaudoIdlaudo_NotEquals;
	public $LaudoIdlaudo_IsLike;
	public $LaudoIdlaudo_IsNotLike;
	public $LaudoIdlaudo_BeginsWith;
	public $LaudoIdlaudo_EndsWith;
	public $LaudoIdlaudo_GreaterThan;
	public $LaudoIdlaudo_GreaterThanOrEqual;
	public $LaudoIdlaudo_LessThan;
	public $LaudoIdlaudo_LessThanOrEqual;
	public $LaudoIdlaudo_In;
	public $LaudoIdlaudo_IsNotEmpty;
	public $LaudoIdlaudo_IsEmpty;
	public $LaudoIdlaudo_BitwiseOr;
	public $LaudoIdlaudo_BitwiseAnd;
	public $CdEspecialidade_Equals;
	public $CdEspecialidade_NotEquals;
	public $CdEspecialidade_IsLike;
	public $CdEspecialidade_IsNotLike;
	public $CdEspecialidade_BeginsWith;
	public $CdEspecialidade_EndsWith;
	public $CdEspecialidade_GreaterThan;
	public $CdEspecialidade_GreaterThanOrEqual;
	public $CdEspecialidade_LessThan;
	public $CdEspecialidade_LessThanOrEqual;
	public $CdEspecialidade_In;
	public $CdEspecialidade_IsNotEmpty;
	public $CdEspecialidade_IsEmpty;
	public $CdEspecialidade_BitwiseOr;
	public $CdEspecialidade_BitwiseAnd;

}

?>