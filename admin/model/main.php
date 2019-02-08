<?php // logica insteken


$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';
switch ($action) {
	case 'makingof':
		require_once(CONTROLLER . 'makingof.php');
		$controller = new makingof();
		break;
	case 'company':
		require_once(CONTROLLER . 'company.php');
		$controller = new company();
		break;
	case 'webdev':
		require_once(CONTROLLER . 'webdev.php');
		$controller = new webdev();
		break;
	case 'listquestions':
		require_once(CONTROLLER . 'listquestions.php');
		$controller = new listquestions();
		break;
	case 'conclusion':
		require_once(CONTROLLER . 'conclusion.php');
		$controller = new conclusion();
		break;
		
	case 'why':
		require_once(CONTROLLER . 'interview.php');
		$controller = new why();
		break;
	case 'dev':
		require_once(CONTROLLER . 'interview.php');
		$controller = new dev();
		break;
	case 'limitation':
		require_once(CONTROLLER . 'interview.php');
		$controller = new limitation();
		break;
	case 'market':
		require_once(CONTROLLER . 'interview.php');
		$controller = new market();
		break;
	case 'tips':
		require_once(CONTROLLER . 'interview.php');
		$controller = new tips();
		break;


	default:
		require_once(CONTROLLER . 'makingof.php');
		$controller = new makingof();
		break;
}
//require_once(VIEWS . '');
$controller->run();