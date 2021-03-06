<?php
/*
global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => 'root',
	"database" => 'buymytime',
	"path" => '',
);

// Set the site locale
i18n::set_locale('en_US');
*/


global $project;
$project = 'buymytime';

global $database;
$database = 'buymytime';

// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");
Email::setAdminEmail('phuongle2611@hotmail.com');

//Decorate/extend the member class
Object::add_extension('Member', 'Pianist');

define('MAIL_FROM_ADDRESS','phuongle2611@hotmail.com');