<?php

return CMap::mergeArray(
    require(dirname(__FILE__).'/common.php'),
    array(
        'components'=>array(
            'fixture'=>array(
                'class'=>'system.test.CDbFixtureManager',
                'basePath' => realpath(dirname(__FILE__) . '/../modules/wapocore/tests/fixtures'),
            ),
            'db' => array(
                'connectionString' => 'mysql:host=127.0.0.1;dbname=wapo_minopix_db',
                'emulatePrepare' => true,
                'username' => 'root',
                'password' => 'namakualam',
                'charset' => 'utf8',
            ),
        ),
    )
);
