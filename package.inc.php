<?php
define('__MLC_URBANAIRSHIP__', dirname(__FILE__));
define('__MLC_URBANAIRSHIP_CORE__', __MLC_URBANAIRSHIP__ . '/_core');
define('__MLC_URBANAIRSHIP_CORE_CTL__', __MLC_URBANAIRSHIP_CORE__ . '/ctl');
define('__MLC_URBANAIRSHIP_CORE_MODEL__', __MLC_URBANAIRSHIP_CORE__ . '/model');
define('__MLC_URBANAIRSHIP_CORE_VIEW__', __MLC_URBANAIRSHIP_CORE__ . '/view');
MLCApplicationBase::$arrClassFiles['MUADriver'] = __MLC_URBANAIRSHIP_CORE__ . '/MUADriver.class.php';
//MLCApplicationBase::$arrClassFiles['MLCAssetDriver'] = __MLC_URBANAIRSHIP_CORE__ . '/MLCAssetDriver.class.php';
$intError = error_reporting(0);
require_once(__MLC_URBANAIRSHIP_CORE__ . '/urbanairship.php');
error_reporting($intError);
//require_once(__MLC_URBANAIRSHIP_CORE__ . '/_enum.inc.php');
//require_once(__MLC_URBANAIRSHIP_CORE__ . '/_exception.inc.php');
