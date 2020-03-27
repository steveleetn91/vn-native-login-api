<?php
/**
 * @package Vn Native Login API
 */
/*
Plugin Name: Vn Native Login API
Plugin URI: https://vnnativeframework.club/
Description: API Login 
Version: 4.1.3
Author: Automattic
Author URI: https://vnnativeframework.club/
License: GPLv2 or later
Text Domain: vnnativeloginapi
*/

require_once dirname(__FILE__) . '/vendor/autoload.php';
require_once dirname(__FILE__) . '/define.php';

load_plugin_textdomain(VNNATIVE_FRAMEWORK_LOGIN_API_TEXT_DOMAIN,false,'./languages');
require_once VNNATIVE_FRAMEWORK_LOGIN_API_PATH . '/autoload/action.php';
require_once VNNATIVE_FRAMEWORK_LOGIN_API_PATH . '/autoload/auth.php';
require_once VNNATIVE_FRAMEWORK_LOGIN_API_PATH . '/autoload/setting.php';