<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    // go nyeting bahasane
    'language' =>'en',
    // jenenge app
    'name' => 'wapoo',
    // default theme ne
    'theme' => 'minopix',
    // default controllere nek mik diketik http://namadomain.com
    'defaultController' => 'site/index',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        // load modules iki pilihan nek ngango modules
        'application.modules.auth.models.*',
        'application.modules.wapocore.core.*',
        'application.modules.restapi.controller.*',
        'application.components.*',
        // go gawe hook
        'application.components.front_end.*',
        'application.components.back_end.*',
    ),

    'modules' => array(
        // uncomment the following to enable the Gii tool
        'restapi',
        'auth',
        'gii' => array('class' => 'system.gii.GiiModule',
            'password' => 'Enter',
            'ipFilters' => array('127.0.0.1', '::1'),
            'newFileMode'=>0666,
            'newDirMode'=>0777,
            ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => array('0' => 'u/login'),
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'error/index',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
               /* array(
                    'class'=>'CPhpMailerLogRoute',
                    'levels'=>CLogger::LEVEL_ERROR,
                    'emails' => array('namakukingkong@gmail.com'),
                    'subject' => 'Error at jenenge appne.com',
                ),*/
/*                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>CLogger::LEVEL_TRACE,
                    'filter'=>'CLogFilter',
                    'logFile' => date('Y-m-d').'-trace.log',
                ),
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>CLogger::LEVEL_ERROR,
                    'filter'=>'CLogFilter',
                    'logFile' => date('Y-m-d').'-error.log',
                ),
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>CLogger::LEVEL_WARNING,
                    'filter'=>'CLogFilter',
                    'logFile' => date('Y-m-d').'-warning.log',
                ),
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>CLogger::LEVEL_INFO,
                    'filter'=>'CLogFilter',
                    'logFile' => date('Y-m-d').'-info.log',
                ),
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'trace,error,warning,info',
                    'filter'=>'CLogFilter',
                    'logFile' => date('Y-m-d').'-all.log',
                ),
                array(
                'class'=>'CWebLogRoute',
                'levels'=>'error, warning',
                ),*/
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
    )

);
