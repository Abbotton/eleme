<?php

namespace Abbotton\Eleme;

use Abbotton\Eleme\Request\Activity;
use Abbotton\Eleme\Request\Common;
use Abbotton\Eleme\Request\Order;
use Abbotton\Eleme\Request\Prescription;
use Abbotton\Eleme\Request\Shop;
use Abbotton\Eleme\Request\Sku;
use Abbotton\Eleme\Request\Ugc;
use Exception;

/**
 * Class Application
 *
 * @package Abbotton\Eleme
 * @property Activity $activity
 * @property Common $common
 * @property Order $order
 * @property Prescription $prescription
 * @property Shop $shop
 * @property Sku $sku
 * @property Ugc $ugc
 */
class Application
{
    private $config;

    public function __construct($config)
    {
        $this->config = new Config($config);
    }

    public function __get($name)
    {
        if (!isset($this->$name)) {
            $class_name = ucfirst($name);
            $application = "\\Abbotton\\Eleme\\Request\\{$class_name}";
            if (!class_exists($application)) {
                throw new Exception($class_name.'不存在');
            }
            $this->$name = new $application($this->config);
        }

        return $this->$name;
    }
}
