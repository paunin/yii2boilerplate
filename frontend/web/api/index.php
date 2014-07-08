<?php

/**
 * Simple Api realization
 */
class MyApi {
    public  $api_version = '1';

    /**
     * Get API versionGet
     *
     * In order u should use smile for work with me
     *
     * @return string
     */
    public function info(){
        return 'Ver. - ' . $this->api_version;
    }
}

require_once '../../../vendor/luracast/restler/vendor/restler.php';

use Luracast\Restler\Restler;

$r = new Restler();
$r->addAPIClass('MyApi'); // repeat for more
$r->addAPIClass('Resources'); //from restler framework for API Explorer
$r->handle(); //serve the response