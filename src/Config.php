<?php

namespace Abbotton\Eleme;

use Exception;

class Config
{
    public $appKey;
    public $appSecret;
    public $baseUrl = 'https://api-be.ele.me/';
    public $version = '3';
    public $accessToken;

    public function __construct(array $config = [])
    {
        if (! isset($config['app_id']) || $config['app_id'] == '') {
            throw new Exception('请设置app_id');
        }
        if (! isset($config['app_secret']) || $config['app_secret'] == '') {
            throw new Exception('请设置app_secret');
        }
        $this->appKey = $config['app_id'];
        $this->appSecret = $config['app_secret'];
        if ($config['access_token']) {
            $this->accessToken = $config['access_token'];
        }
    }
}
