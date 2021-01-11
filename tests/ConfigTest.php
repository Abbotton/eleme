<?php

namespace Abbotton\Eleme\Tests;

use Abbotton\Eleme\Config;

class ConfigTest extends TestCase
{
    public function test_will_get_except_if_app_id_is_not_set()
    {
        try {
            $config = [];
            new Config($config);
        } catch (\Exception $e) {
            $this->assertEquals('请设置app_id', $e->getMessage());
        }
    }

    public function test_will_get_except_if_app_secret_is_not_set()
    {
        try {
            $config = [
                'app_id' => 'foo',
            ];
            new Config($config);
        } catch (\Exception $e) {
            $this->assertEquals('请设置app_secret', $e->getMessage());
        }
    }

    public function test_will_get_except_if_access_token_is_not_set()
    {
        try {
            $config = [
                'app_id' => 'foo',
                'app_secret' => 'bar'
            ];
            new Config($config);
        } catch (\Exception $e) {
            $this->assertEquals('请设置access_token', $e->getMessage());
        }
    }

    public function test_will_get_instance_if_config_is_right()
    {
        $config = [
            'app_id' => 'foo',
            'app_secret' => 'bar',
            'access_token' => 'foobar'
        ];
        $instance = new Config($config);
        $this->assertInstanceOf(Config::class, $instance);
        $this->assertEquals('foo', $instance->appKey);
        $this->assertEquals('bar', $instance->appSecret);
        $this->assertEquals('foobar', $instance->accessToken);
    }
}
