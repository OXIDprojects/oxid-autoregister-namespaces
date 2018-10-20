<?php

class autoregister_namespaces_oxconfig extends autoregister_namespaces_oxconfig_parent
{
    public function init()
    {
        // Duplicated init protection
        if ($this->_blInit) {
           return;
        }
        parent::init();
        
        //register any module namespaces that are not yet registered
        $loader = require VENDOR_PATH . 'autoload.php';
        $loadedPrefixes = $loader->getPrefixesPsr4();
        $modulePaths = $this->getConfigParam('aModulePaths');
        if (is_array($modulePaths)){
            foreach ($modulePaths as $modulePath){
                $modulesDir = $this->getModulesDir(true);
                $modulePathAbsolute = $modulesDir . $modulePath;
                $jsonPath = $modulePathAbsolute . '/composer.json';
                if(file_exists($jsonPath)){
                    if ($json = file_get_contents($jsonPath)){
                        if ($decoded = json_decode($json, true)){
                            if ($prefixes = $decoded['autoload']['psr-4']){
                                if (is_array($prefixes)){
                                    foreach ($prefixes as $prefix => $prefixPath){
                                        if(!$loadedPrefixes[$prefix]){
                                            if (strpos($prefixPath, $modulePath) !== false){
                                                $loader->addPsr4($prefix, $modulePathAbsolute);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}