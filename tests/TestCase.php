<?php

namespace Abbotton\Eleme\Tests;

use Abbotton\Eleme\Application;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function getApplicationInstance(): Application
    {
        $config = [
            'app_id' => 'foo',
            'app_secret' => 'bar',
            'access_token' => 'foobar'
        ];

        return new Application($config);
    }
}
