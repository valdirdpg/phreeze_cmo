<?php
/**
 * @package CMO
 *
 * APPLICATION-WIDE CONFIGURATION SETTINGS
 *
 * This file contains application-wide configuration settings.  The settings
 * here will be the same regardless of the machine on which the app is running.
 *
 * This configuration should be added to version control.
 *
 * No settings should be added to this file that would need to be changed
 * on a per-machine basic (ie local, staging or production).  Any
 * machine-specific settings should be added to _machine_config.php
 */

/**
 * APPLICATION ROOT DIRECTORY
 * If the application doesn't detect this correctly then it can be set explicitly
 */
if (!GlobalConfig::$APP_ROOT) GlobalConfig::$APP_ROOT = realpath("./");

/**
 * check is needed to ensure asp_tags is not enabled
 */
if (ini_get('asp_tags')) 
	die('<h3>Server Configuration Problem: asp_tags is enabled, but is not compatible with Savant.</h3>'
	. '<p>You can disable asp_tags in .htaccess, php.ini or generate your app with another template engine such as Smarty.</p>');

/**
 * INCLUDE PATH
 * Adjust the include path as necessary so PHP can locate required libraries
 */
set_include_path(
		GlobalConfig::$APP_ROOT . '/libs/' . PATH_SEPARATOR .
		GlobalConfig::$APP_ROOT . '/../phreeze/libs' . PATH_SEPARATOR .
		GlobalConfig::$APP_ROOT . '/vendor/phreeze/phreeze/libs/' . PATH_SEPARATOR .
		get_include_path()
);

/**
 * COMPOSER AUTOLOADER
 * Uncomment if Composer is being used to manage dependencies
 */
// $loader = require 'vendor/autoload.php';
// $loader->setUseIncludePath(true);

/**
 * SESSION CLASSES
 * Any classes that will be stored in the session can be added here
 * and will be pre-loaded on every page
 */
require_once "App/ExampleUser.php";

/**
 * RENDER ENGINE
 * You can use any template system that implements
 * IRenderEngine for the view layer.  Phreeze provides pre-built
 * implementations for Smarty, Savant and plain PHP.
 */
require_once 'verysimple/Phreeze/SavantRenderEngine.php';
GlobalConfig::$TEMPLATE_ENGINE = 'SavantRenderEngine';
GlobalConfig::$TEMPLATE_PATH = GlobalConfig::$APP_ROOT . '/templates/';

/**
 * ROUTE MAP
 * The route map connects URLs to Controller+Method and additionally maps the
 * wildcards to a named parameter so that they are accessible inside the
 * Controller without having to parse the URL for parameters such as IDs
 */
GlobalConfig::$ROUTE_MAP = array(

	// default controller when no route specified
	'GET:' => array('route' => 'Default.Home'),
		
	// example authentication routes
	'GET:loginform' => array('route' => 'SecureExample.LoginForm'),
	'POST:login' => array('route' => 'SecureExample.Login'),
	'GET:secureuser' => array('route' => 'SecureExample.UserPage'),
	'GET:secureadmin' => array('route' => 'SecureExample.AdminPage'),
	'GET:logout' => array('route' => 'SecureExample.Logout'),
		
	// Convenio
	'GET:convenios' => array('route' => 'Convenio.ListView'),
	'GET:convenio/(:num)' => array('route' => 'Convenio.SingleView', 'params' => array('idconvenio' => 1)),
	'GET:api/convenios' => array('route' => 'Convenio.Query'),
	'POST:api/convenio' => array('route' => 'Convenio.Create'),
	'GET:api/convenio/(:num)' => array('route' => 'Convenio.Read', 'params' => array('idconvenio' => 2)),
	'PUT:api/convenio/(:num)' => array('route' => 'Convenio.Update', 'params' => array('idconvenio' => 2)),
	'DELETE:api/convenio/(:num)' => array('route' => 'Convenio.Delete', 'params' => array('idconvenio' => 2)),
		
	// Especialidade
	'GET:especialidades' => array('route' => 'Especialidade.ListView'),
	'GET:especialidade/(:num)' => array('route' => 'Especialidade.SingleView', 'params' => array('idespecialidades' => 1)),
	'GET:api/especialidades' => array('route' => 'Especialidade.Query'),
	'POST:api/especialidade' => array('route' => 'Especialidade.Create'),
	'GET:api/especialidade/(:num)' => array('route' => 'Especialidade.Read', 'params' => array('idespecialidades' => 2)),
	'PUT:api/especialidade/(:num)' => array('route' => 'Especialidade.Update', 'params' => array('idespecialidades' => 2)),
	'DELETE:api/especialidade/(:num)' => array('route' => 'Especialidade.Delete', 'params' => array('idespecialidades' => 2)),
		
	// Medico
	'GET:medicos' => array('route' => 'Medico.ListView'),
	'GET:medico/(:num)' => array('route' => 'Medico.SingleView', 'params' => array('idmedicos' => 1)),
	'GET:api/medicos' => array('route' => 'Medico.Query'),
	'POST:api/medico' => array('route' => 'Medico.Create'),
	'GET:api/medico/(:num)' => array('route' => 'Medico.Read', 'params' => array('idmedicos' => 2)),
	'PUT:api/medico/(:num)' => array('route' => 'Medico.Update', 'params' => array('idmedicos' => 2)),
	'DELETE:api/medico/(:num)' => array('route' => 'Medico.Delete', 'params' => array('idmedicos' => 2)),
		
	// Paciente
	'GET:pacientes' => array('route' => 'Paciente.ListView'),
	'GET:paciente/(:num)' => array('route' => 'Paciente.SingleView', 'params' => array('idpacientes' => 1)),
	'GET:api/pacientes' => array('route' => 'Paciente.Query'),
	'POST:api/paciente' => array('route' => 'Paciente.Create'),
	'GET:api/paciente/(:num)' => array('route' => 'Paciente.Read', 'params' => array('idpacientes' => 2)),
	'PUT:api/paciente/(:num)' => array('route' => 'Paciente.Update', 'params' => array('idpacientes' => 2)),
	'DELETE:api/paciente/(:num)' => array('route' => 'Paciente.Delete', 'params' => array('idpacientes' => 2)),

	// catch any broken API urls
	'GET:api/(:any)' => array('route' => 'Default.ErrorApi404'),
	'PUT:api/(:any)' => array('route' => 'Default.ErrorApi404'),
	'POST:api/(:any)' => array('route' => 'Default.ErrorApi404'),
	'DELETE:api/(:any)' => array('route' => 'Default.ErrorApi404')
);

/**
 * FETCHING STRATEGY
 * You may uncomment any of the lines below to specify always eager fetching.
 * Alternatively, you can copy/paste to a specific page for one-time eager fetching
 * If you paste into a controller method, replace $G_PHREEZER with $this->Phreezer
 */
?>