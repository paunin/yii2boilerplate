<?php

return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../common/config/main.php'),
    require(__DIR__ . '/../../../common/config/main-local.php'),
    require(__DIR__ . '/../../../console/config/main.php'),
    require(__DIR__ . '/../../../console/config/main-local.php'),
    [
        'components' => [
            'db' => [
                'dsn' => 'pgsql:host=localhost;dbname=yii2_paunin_com_unit',
            ],
        ],
        'controllerMap' => [
            'fixture' => [
                'class' => 'yii\faker\FixtureController',
                'fixtureDataPath' => '@frontend/tests/unit/fixtures/data',
                'templatePath' => '@common/tests/templates/fixtures'
            ],
        ],
    ]
);
