<?php
/** @package    Clinicacmo::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * PacienteCriteria allows custom querying for the Paciente object.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the ModelCriteria class which is extended from this class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @inheritdocs
 * @package Clinicacmo::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class PacienteCriteriaDAO extends Criteria
{

	public $Idpacientes_Equals;
	public $Idpacientes_NotEquals;
	public $Idpacientes_IsLike;
	public $Idpacientes_IsNotLike;
	public $Idpacientes_BeginsWith;
	public $Idpacientes_EndsWith;
	public $Idpacientes_GreaterThan;
	public $Idpacientes_GreaterThanOrEqual;
	public $Idpacientes_LessThan;
	public $Idpacientes_LessThanOrEqual;
	public $Idpacientes_In;
	public $Idpacientes_IsNotEmpty;
	public $Idpacientes_IsEmpty;
	public $Idpacientes_BitwiseOr;
	public $Idpacientes_BitwiseAnd;
	public $NmPaciente_Equals;
	public $NmPaciente_NotEquals;
	public $NmPaciente_IsLike;
	public $NmPaciente_IsNotLike;
	public $NmPaciente_BeginsWith;
	public $NmPaciente_EndsWith;
	public $NmPaciente_GreaterThan;
	public $NmPaciente_GreaterThanOrEqual;
	public $NmPaciente_LessThan;
	public $NmPaciente_LessThanOrEqual;
	public $NmPaciente_In;
	public $NmPaciente_IsNotEmpty;
	public $NmPaciente_IsEmpty;
	public $NmPaciente_BitwiseOr;
	public $NmPaciente_BitwiseAnd;
	public $DtNascimento_Equals;
	public $DtNascimento_NotEquals;
	public $DtNascimento_IsLike;
	public $DtNascimento_IsNotLike;
	public $DtNascimento_BeginsWith;
	public $DtNascimento_EndsWith;
	public $DtNascimento_GreaterThan;
	public $DtNascimento_GreaterThanOrEqual;
	public $DtNascimento_LessThan;
	public $DtNascimento_LessThanOrEqual;
	public $DtNascimento_In;
	public $DtNascimento_IsNotEmpty;
	public $DtNascimento_IsEmpty;
	public $DtNascimento_BitwiseOr;
	public $DtNascimento_BitwiseAnd;
	public $Sexo_Equals;
	public $Sexo_NotEquals;
	public $Sexo_IsLike;
	public $Sexo_IsNotLike;
	public $Sexo_BeginsWith;
	public $Sexo_EndsWith;
	public $Sexo_GreaterThan;
	public $Sexo_GreaterThanOrEqual;
	public $Sexo_LessThan;
	public $Sexo_LessThanOrEqual;
	public $Sexo_In;
	public $Sexo_IsNotEmpty;
	public $Sexo_IsEmpty;
	public $Sexo_BitwiseOr;
	public $Sexo_BitwiseAnd;
	public $Cpf_Equals;
	public $Cpf_NotEquals;
	public $Cpf_IsLike;
	public $Cpf_IsNotLike;
	public $Cpf_BeginsWith;
	public $Cpf_EndsWith;
	public $Cpf_GreaterThan;
	public $Cpf_GreaterThanOrEqual;
	public $Cpf_LessThan;
	public $Cpf_LessThanOrEqual;
	public $Cpf_In;
	public $Cpf_IsNotEmpty;
	public $Cpf_IsEmpty;
	public $Cpf_BitwiseOr;
	public $Cpf_BitwiseAnd;
	public $Rg_Equals;
	public $Rg_NotEquals;
	public $Rg_IsLike;
	public $Rg_IsNotLike;
	public $Rg_BeginsWith;
	public $Rg_EndsWith;
	public $Rg_GreaterThan;
	public $Rg_GreaterThanOrEqual;
	public $Rg_LessThan;
	public $Rg_LessThanOrEqual;
	public $Rg_In;
	public $Rg_IsNotEmpty;
	public $Rg_IsEmpty;
	public $Rg_BitwiseOr;
	public $Rg_BitwiseAnd;
	public $Profissao_Equals;
	public $Profissao_NotEquals;
	public $Profissao_IsLike;
	public $Profissao_IsNotLike;
	public $Profissao_BeginsWith;
	public $Profissao_EndsWith;
	public $Profissao_GreaterThan;
	public $Profissao_GreaterThanOrEqual;
	public $Profissao_LessThan;
	public $Profissao_LessThanOrEqual;
	public $Profissao_In;
	public $Profissao_IsNotEmpty;
	public $Profissao_IsEmpty;
	public $Profissao_BitwiseOr;
	public $Profissao_BitwiseAnd;
	public $NmPai_Equals;
	public $NmPai_NotEquals;
	public $NmPai_IsLike;
	public $NmPai_IsNotLike;
	public $NmPai_BeginsWith;
	public $NmPai_EndsWith;
	public $NmPai_GreaterThan;
	public $NmPai_GreaterThanOrEqual;
	public $NmPai_LessThan;
	public $NmPai_LessThanOrEqual;
	public $NmPai_In;
	public $NmPai_IsNotEmpty;
	public $NmPai_IsEmpty;
	public $NmPai_BitwiseOr;
	public $NmPai_BitwiseAnd;
	public $NmMae_Equals;
	public $NmMae_NotEquals;
	public $NmMae_IsLike;
	public $NmMae_IsNotLike;
	public $NmMae_BeginsWith;
	public $NmMae_EndsWith;
	public $NmMae_GreaterThan;
	public $NmMae_GreaterThanOrEqual;
	public $NmMae_LessThan;
	public $NmMae_LessThanOrEqual;
	public $NmMae_In;
	public $NmMae_IsNotEmpty;
	public $NmMae_IsEmpty;
	public $NmMae_BitwiseOr;
	public $NmMae_BitwiseAnd;
	public $NrCarteira_Equals;
	public $NrCarteira_NotEquals;
	public $NrCarteira_IsLike;
	public $NrCarteira_IsNotLike;
	public $NrCarteira_BeginsWith;
	public $NrCarteira_EndsWith;
	public $NrCarteira_GreaterThan;
	public $NrCarteira_GreaterThanOrEqual;
	public $NrCarteira_LessThan;
	public $NrCarteira_LessThanOrEqual;
	public $NrCarteira_In;
	public $NrCarteira_IsNotEmpty;
	public $NrCarteira_IsEmpty;
	public $NrCarteira_BitwiseOr;
	public $NrCarteira_BitwiseAnd;
	public $EndRua_Equals;
	public $EndRua_NotEquals;
	public $EndRua_IsLike;
	public $EndRua_IsNotLike;
	public $EndRua_BeginsWith;
	public $EndRua_EndsWith;
	public $EndRua_GreaterThan;
	public $EndRua_GreaterThanOrEqual;
	public $EndRua_LessThan;
	public $EndRua_LessThanOrEqual;
	public $EndRua_In;
	public $EndRua_IsNotEmpty;
	public $EndRua_IsEmpty;
	public $EndRua_BitwiseOr;
	public $EndRua_BitwiseAnd;
	public $EndBairro_Equals;
	public $EndBairro_NotEquals;
	public $EndBairro_IsLike;
	public $EndBairro_IsNotLike;
	public $EndBairro_BeginsWith;
	public $EndBairro_EndsWith;
	public $EndBairro_GreaterThan;
	public $EndBairro_GreaterThanOrEqual;
	public $EndBairro_LessThan;
	public $EndBairro_LessThanOrEqual;
	public $EndBairro_In;
	public $EndBairro_IsNotEmpty;
	public $EndBairro_IsEmpty;
	public $EndBairro_BitwiseOr;
	public $EndBairro_BitwiseAnd;
	public $EndCidade_Equals;
	public $EndCidade_NotEquals;
	public $EndCidade_IsLike;
	public $EndCidade_IsNotLike;
	public $EndCidade_BeginsWith;
	public $EndCidade_EndsWith;
	public $EndCidade_GreaterThan;
	public $EndCidade_GreaterThanOrEqual;
	public $EndCidade_LessThan;
	public $EndCidade_LessThanOrEqual;
	public $EndCidade_In;
	public $EndCidade_IsNotEmpty;
	public $EndCidade_IsEmpty;
	public $EndCidade_BitwiseOr;
	public $EndCidade_BitwiseAnd;
	public $EndCep_Equals;
	public $EndCep_NotEquals;
	public $EndCep_IsLike;
	public $EndCep_IsNotLike;
	public $EndCep_BeginsWith;
	public $EndCep_EndsWith;
	public $EndCep_GreaterThan;
	public $EndCep_GreaterThanOrEqual;
	public $EndCep_LessThan;
	public $EndCep_LessThanOrEqual;
	public $EndCep_In;
	public $EndCep_IsNotEmpty;
	public $EndCep_IsEmpty;
	public $EndCep_BitwiseOr;
	public $EndCep_BitwiseAnd;
	public $EndUf_Equals;
	public $EndUf_NotEquals;
	public $EndUf_IsLike;
	public $EndUf_IsNotLike;
	public $EndUf_BeginsWith;
	public $EndUf_EndsWith;
	public $EndUf_GreaterThan;
	public $EndUf_GreaterThanOrEqual;
	public $EndUf_LessThan;
	public $EndUf_LessThanOrEqual;
	public $EndUf_In;
	public $EndUf_IsNotEmpty;
	public $EndUf_IsEmpty;
	public $EndUf_BitwiseOr;
	public $EndUf_BitwiseAnd;
	public $NrTelefone_Equals;
	public $NrTelefone_NotEquals;
	public $NrTelefone_IsLike;
	public $NrTelefone_IsNotLike;
	public $NrTelefone_BeginsWith;
	public $NrTelefone_EndsWith;
	public $NrTelefone_GreaterThan;
	public $NrTelefone_GreaterThanOrEqual;
	public $NrTelefone_LessThan;
	public $NrTelefone_LessThanOrEqual;
	public $NrTelefone_In;
	public $NrTelefone_IsNotEmpty;
	public $NrTelefone_IsEmpty;
	public $NrTelefone_BitwiseOr;
	public $NrTelefone_BitwiseAnd;
	public $NrCelular_Equals;
	public $NrCelular_NotEquals;
	public $NrCelular_IsLike;
	public $NrCelular_IsNotLike;
	public $NrCelular_BeginsWith;
	public $NrCelular_EndsWith;
	public $NrCelular_GreaterThan;
	public $NrCelular_GreaterThanOrEqual;
	public $NrCelular_LessThan;
	public $NrCelular_LessThanOrEqual;
	public $NrCelular_In;
	public $NrCelular_IsNotEmpty;
	public $NrCelular_IsEmpty;
	public $NrCelular_BitwiseOr;
	public $NrCelular_BitwiseAnd;
	public $CtEmail_Equals;
	public $CtEmail_NotEquals;
	public $CtEmail_IsLike;
	public $CtEmail_IsNotLike;
	public $CtEmail_BeginsWith;
	public $CtEmail_EndsWith;
	public $CtEmail_GreaterThan;
	public $CtEmail_GreaterThanOrEqual;
	public $CtEmail_LessThan;
	public $CtEmail_LessThanOrEqual;
	public $CtEmail_In;
	public $CtEmail_IsNotEmpty;
	public $CtEmail_IsEmpty;
	public $CtEmail_BitwiseOr;
	public $CtEmail_BitwiseAnd;
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
	public $Usuario_Equals;
	public $Usuario_NotEquals;
	public $Usuario_IsLike;
	public $Usuario_IsNotLike;
	public $Usuario_BeginsWith;
	public $Usuario_EndsWith;
	public $Usuario_GreaterThan;
	public $Usuario_GreaterThanOrEqual;
	public $Usuario_LessThan;
	public $Usuario_LessThanOrEqual;
	public $Usuario_In;
	public $Usuario_IsNotEmpty;
	public $Usuario_IsEmpty;
	public $Usuario_BitwiseOr;
	public $Usuario_BitwiseAnd;
	public $CdConvenio_Equals;
	public $CdConvenio_NotEquals;
	public $CdConvenio_IsLike;
	public $CdConvenio_IsNotLike;
	public $CdConvenio_BeginsWith;
	public $CdConvenio_EndsWith;
	public $CdConvenio_GreaterThan;
	public $CdConvenio_GreaterThanOrEqual;
	public $CdConvenio_LessThan;
	public $CdConvenio_LessThanOrEqual;
	public $CdConvenio_In;
	public $CdConvenio_IsNotEmpty;
	public $CdConvenio_IsEmpty;
	public $CdConvenio_BitwiseOr;
	public $CdConvenio_BitwiseAnd;
	public $CdLaudo_Equals;
	public $CdLaudo_NotEquals;
	public $CdLaudo_IsLike;
	public $CdLaudo_IsNotLike;
	public $CdLaudo_BeginsWith;
	public $CdLaudo_EndsWith;
	public $CdLaudo_GreaterThan;
	public $CdLaudo_GreaterThanOrEqual;
	public $CdLaudo_LessThan;
	public $CdLaudo_LessThanOrEqual;
	public $CdLaudo_In;
	public $CdLaudo_IsNotEmpty;
	public $CdLaudo_IsEmpty;
	public $CdLaudo_BitwiseOr;
	public $CdLaudo_BitwiseAnd;
	public $Idade_Equals;
	public $Idade_NotEquals;
	public $Idade_IsLike;
	public $Idade_IsNotLike;
	public $Idade_BeginsWith;
	public $Idade_EndsWith;
	public $Idade_GreaterThan;
	public $Idade_GreaterThanOrEqual;
	public $Idade_LessThan;
	public $Idade_LessThanOrEqual;
	public $Idade_In;
	public $Idade_IsNotEmpty;
	public $Idade_IsEmpty;
	public $Idade_BitwiseOr;
	public $Idade_BitwiseAnd;
	public $CdProntuario_Equals;
	public $CdProntuario_NotEquals;
	public $CdProntuario_IsLike;
	public $CdProntuario_IsNotLike;
	public $CdProntuario_BeginsWith;
	public $CdProntuario_EndsWith;
	public $CdProntuario_GreaterThan;
	public $CdProntuario_GreaterThanOrEqual;
	public $CdProntuario_LessThan;
	public $CdProntuario_LessThanOrEqual;
	public $CdProntuario_In;
	public $CdProntuario_IsNotEmpty;
	public $CdProntuario_IsEmpty;
	public $CdProntuario_BitwiseOr;
	public $CdProntuario_BitwiseAnd;

}

?>