<?php
return array(
    'components'=>array(
        // uncomment the following to enable URLs in path-format
        'urlManager'=>array(
            // 'class'     => 'ext.localeurls.LocaleUrlManager',
            'urlFormat'=>'path',
            'showScriptName'=>false,
            'caseSensitive'=>false,
            'rules' => array(
                // web rest api kanban/project/<id:[a-zA-Z0-9-]+>'
                'contact'=>'site/contact',
                'privacypolice'=>'site/PrivacyPolice',
                'about'=>'site/about',
                'user/<id:\d+>-<slug:.*?>>'=>'user/me',
                'user/me/<id:\d+>-<slug:.*?>'=>'user/me',
                'product/view/<id:\d+>-<slug:.*?>'=>'product/view',
                'kost/<id:\d+>-<slug:.*?>'=>'kost/view',
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            )
        ),

    ),

);
?>