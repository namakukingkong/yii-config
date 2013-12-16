<?php
return array(
    'components'=>array(
        /*extension for curl*/
        'curl' => array(
            'class' => 'ext.curl.Curl',
        ),

        /*extension fo detect mobile browser*/
        'mobileDetect' => array(
            'class' => 'ext.MobileDetect.MobileDetect'
        ),

    ),

);
?>