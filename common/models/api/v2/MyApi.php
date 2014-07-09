<?php
namespace common\models\api\v2;
/**
 * Class Api
 */
class MyApi {
    public  $api_version = '2';

    /**
     * Get API versionGet
     *
     * In order u should use smile for work with me
     *
     * @return string
     */
    public function info(){
        return \Yii::t('api','Version').' - '. $this->api_version;
    }
}