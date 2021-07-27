<?php 

/**
* Plugin Name: EzUserTables
* Plugin URI:
* Description: Ez External User Table Loader For WordPress
* Version: 1.0
* Author: Dustin Robinson
* Author URI:
* License:
*/

namespace RBE\EzUserTables;

if(!class_exists(EzUserTables::class) && is_readable(__DIR__.'/vendor/autoload.php')){
  require_once __DIR__.'/vendor/autoload.php';
}

class_exists(ExUserTables::class) && EzUserTables::instance();
