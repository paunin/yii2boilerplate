<?php
namespace common\models\api\v1;
/**
 * Class Api
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