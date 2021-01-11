<?php

namespace Abbotton\Eleme\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

class RequestTest extends TestCase
{
    public function test_all_requests_will_return_the_correct_response()
    {
        $mock = new MockHandler();
        $handlerStack = new HandlerStack($mock);
        $client = new Client(['handler' => $handlerStack]);
        $app = $this->getApplicationInstance()->setHttpClient($client);

        $responseJson = $this->getResponseJson();
        $classArray = ['activity', 'common', 'order', 'prescription', 'shop', 'sku', 'ugc'];
        foreach ($classArray as &$class) {
            $reflectionClass = new \ReflectionClass($app->$class);
            $methods = $reflectionClass->getMethods();
            foreach ($methods as &$method) {
                if ($method->class == 'Abbotton\\Eleme\\Request\\'.ucfirst($class)) {
                    $response = new Response(200, [], $responseJson);
                    $mock->append($response);
                    $methodName = $method->getName();
                    $result = $app->$class->$methodName(['foo' => 'bar']);
                    $this->assertSame($responseJson, $result);
                }
            }
        }
    }

    private function getResponseJson()
    {
        return <<<'JSON'
{
    "body":{
        "errno":0,
        "error":"success",
        "data":{}
    },
    "cmd":"foobar",
    "version":"3",
    "timestamp":1592362957,
    "ticket":"75030A2F-27E6-444A-9111-C0A3BEE350A4",
    "source":"37619",
    "sign":"117D562435A8019245B2D4F35B9EDE0D",
    "encrypt":""
}
JSON;
    }
}
