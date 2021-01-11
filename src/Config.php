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
        if (! isset($config['access_token']) || $config['access_token'] == '') {
            throw new Exception('请设置access_token');
        }
        $this->appKey = $config['app_id'];
        $this->appSecret = $config['app_secret'];
        $this->accessToken = $config['access_token'];
    }
}
