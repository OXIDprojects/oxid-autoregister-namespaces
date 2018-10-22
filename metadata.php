<?php

$sMetadataVersion = '1.1';
$aModule = array(
    'id'          => 'autoregister-namespaces',
    'title'       => 'Autoregister Module Namespaces',
    'description' =>  array(
        'de'=>'',
        'en'=>'',
    ),
    'version'     => '0.0.3',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'oxconfig' => 'zunderweb/autoregister-namespaces/core/autoregister_namespaces_oxconfig', 
    ),
    'settings' => array(
        array('group' => 'zwar_settings', 'name' => 'blZwarProductionMode', 'type' => 'bool',  'value' => '0'),
    ),
);
