<?php

define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localhost/Interview-webdev/');
define('MODEL', APP_ROOT.'/admin/model/');
define('VIEW', APP_ROOT.'/admin/view/');
define('CONTROLLER', APP_ROOT.'/admin/controller/');
require_once(VIEW . 'header.php');
require_once(MODEL . 'main.php');
require_once(VIEW . 'footer.php');

?>