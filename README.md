# 基于umeng官方php sdk v1.4,支持

## 安装
```php
    composer require phalavel/umpush
```

在配置文件umeng.php中填入appkey以及master_secret既可完成配置

## 用法

Android用法:
```php
    $config =  [
        'ios_app_key'                => '',
        'ios_app_master_secret'     => '',
        'android_app_key'            => '',
        'android_app_master_secret' => '',
        'production_mode'           => false,
    ];

    $device_token = 'xxxx';
    $predefined = array('ticker' => 'android ticker' ,...);
    $extraField = array(); //other extra filed
    (new UmengPusher($config))->android()->sendUnicast($device_token,$predefined,$extraField); //单播

```

IOS用法:

```php
    $config =  [
        'ios_app_key'                => '',
        'ios_app_master_secret'     => '',
        'android_app_key'            => '',
        'android_app_master_secret' => '',
        'production_mode'           => false,
    ];
    
    $device_token = 'xxxx';
    $predefined = array('alert' => 'ios alert' ,...);
    $customField = array(); //other custom filed
    (new UmengPusher($config))->ios()->sendUnicast($device_token,$predefined,$customField); //单播
    
```

## Api

说明: Android API跟 IOS一样

```php
    
    sendBroadcast($predefined = [], $extraField = []); //广播
    sendUnicast($device_tokens = '', $predefined= [], $extraField = []); //单播
    sendListcast($device_tokens = '', $predefined= [], $extraField = []); //列播
    sendFilecast($fileContents = '', $predefined= [],$extraField = []); //文件播
    sendGroupcast($filter = [], $predefined= [], $extraField = []); //组播
    sendCustomizedcast($alias = '', $alias_type = '', $predefined= [], $extraField = []); //自定义播,通过alias
    sendCustomizedcastFileId($file_contents = '', $predefined= [], $extraField = []); //自定义播,通过file_id
    
```

## Exception

程序不处理异常,可根据业务情况自行处理, 若抛出异常,可通过 `e->getHttpCode()` 获取http状态码, 通过 `e->getErrCode()`获取umeng返回的错误码.
使用过程中若出错,可自行查看Log日志# umeng

