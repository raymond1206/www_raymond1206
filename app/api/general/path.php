<?php
define('ROOT_DIR', realpath(__DIR__.'/../../../'));
define('APP_DIR', realpath(ROOT_DIR.'/app'));
define('API_DIR', realpath(APP_DIR.'/api'));
define('CONFIG_DIR', realpath(API_DIR.'/general'));
define('ASSETS_DIR', realpath(APP_DIR.'/assets'));
define('DATA_DIR', realpath(APP_DIR.'/data'));
define('DATABASE_DIR', realpath(DATA_DIR.'/database.db'));
define('TEMPLATES_DIR', realpath(APP_DIR.'/templates'));