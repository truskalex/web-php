<?php
session_start();
error_reporting(~E_NOTICE & ~E_WARNING);
require_once 'config/config.php';

require_once 'libs/Core.php';
require_once 'libs/Controller.php';
require_once 'libs/Database.php';