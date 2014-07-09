<?php
require_once './yiinorun.php';

use Luracast\Restler\Defaults;
use Luracast\Restler\Format;
use Luracast\Restler\Util;
//require_once '../../../vendor/luracast/restler/vendor/restler.php';

use Luracast\Restler\Restler;
Defaults::$useUrlBasedVersioning = true;
Defaults::$throttle = 20;
//@todo
//Defaults::$cacheDirectory = Yii::getPathOfAlias('application').'/runtime/cache';
//Defaults::$supportedLanguages = array_keys(Yii::app()->params['translatedLanguages']);
Defaults::$language = \Yii::$app->language;


$r = new Restler();
$r->setAPIVersion(2);
$r->addAPIClass('\\common\\models\\api\\MyApi'); // repeat for more
$r->addAPIClass('Resources'); //from restler framework for API Explorer
$r->handle(); //serve the response