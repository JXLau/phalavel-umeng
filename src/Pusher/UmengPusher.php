<?php

namespace Phalavel\Push\Umeng\Pusher;

class UmengPusher
{
    private $android = null;
    private $ios = null;
    public function __construct($config) {
        $iosAppKey = $config->ios_app_key;
        $iosAppMasterSecret = $config->ios_app_master_secret;
        $androidAppKey = $config->android_app_key;
        $androidAppMasterSecret = $config->android_app_master_secret;

        $this->android = new AndroidPusher($androidAppKey, $androidAppMasterSecret, $config->production_mode);
        $this->ios = new IOSPusher($iosAppKey, $iosAppMasterSecret, $config->production_mode);
    }

    public function android(){
        return $this->android;
    }

    public function ios(){
        return $this->ios;
    }
}
