<?php

$sMetadataVersion = '2.0';
$aModule = array(
    'id'          => 'autoregister-namespaces',
    'title'       => 'Zunderweb Autoregister Module Namespaces',
    'description' =>  array(
        'de'=>'',
        'en'=>'',
    ),
    'version'     => '1.0.0',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        \OxidEsales\Eshop\Core\Config::class => \zunderweb\autoregister_namespaces\core\Config::class,
    ),
    'settings' => array(
        array('group' => 'zwar_settings', 'name' => 'blZwarProductionMode', 'type' => 'bool',  'value' => '0'),
    ),
);