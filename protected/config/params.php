<?php
// application-level parameters that can be accessed
// using Yii::app()->params['paramName']
return array(
    'params' => array(
        'themes' => array(
            'name'          =>'minopix',
            'front_end'     =>'front_end',
            'front_view'    =>'wrapper',
            'back_end'      =>'back_end',
            'back_view'      =>'wrapper',
            ),
        // this is used in contact page
        'recaptcha' => array(
            'publicKey' => '6LfTNMoSAAAAAIpt70PEyfgtm2WmY1bVUXyySKVr',
            'privateKey' => '6LfTNMoSAAAAAKsrqN-in_t1OtD3VrCPmdap76y4'),
    )
);
?>