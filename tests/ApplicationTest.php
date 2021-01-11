<?php

namespace Abbotton\Eleme\Tests;

use Abbotton\Eleme\Application;
use Abbotton\Eleme\Config;

class ApplicationTest extends TestCase
{
    public function test_it_can_get_application_instance()
    {
        $application = $this->getApplicationInstance();
        $this->assertInstanceOf(Application::class, $application);

        $reflectionApplication = new \ReflectionClass($application);

        $this->assertTrue($reflectionApplication->hasProperty('config'));
        $property = $reflectionApplication->getProperty('config');
        $property->setAccessible(true);
        $this->assertInstanceOf(Config::class, $property->getValue($application));
    }

    public function test_request_class_not_exist()
    {
        $application = $this->getApplicationInstance();
        try {
            $application->foo->bar();
        } catch (\Exception $e) {
            $this->assertEquals('Foo不存在', $e->getMessage());
        }
    }
}
