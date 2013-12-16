<?php

return array(
    'components'=>array(
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=127.0.0.1;dbname=wapo_minopix_db',
            //'connectionString' => 'mysql:host=127.0.0.1;dbname=example_db',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'namakualam',
            'charset' => 'utf8',
        ),

        /*'dbadvert' => array(
            'connectionString' => 'mysql:host=127.0.0.1;dbname=db_kost',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'class'   => 'CDbConnection'

        ),*/

    ),

);
