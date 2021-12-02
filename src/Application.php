<?php

namespace Abbotton\Eleme;

use Abbotton\Eleme\Request\Activity;
use Abbotton\Eleme\Request\Common;
use Abbotton\Eleme\Request\Cpc;
use Abbotton\Eleme\Request\Decorate;
use Abbotton\Eleme\Request\Order;
use Abbotton\Eleme\Request\Prescription;
use Abbotton\Eleme\Request\Shop;
use Abbotton\Eleme\Request\Sku;
use Abbotton\Eleme\Request\Ugc;
use Exception;
use GuzzleHttp\Client;

/**
 * Class Application.
 *
 * @property Activity $activity
 * @property Cpc $cpc
 * @property Common $common
 * @property Decorate $decorate
 * @property Order $order
 * @property Prescription $prescription
 * @property Shop $shop
 * @property Sku $sku
 * @property Ugc $ugc
 */
class Application
{
    private $config;
    private $client;

    public function __construct($config)
    {
        $this->config = new Config($config);
        $this->client = new Client();
    }

    public function __get($name)
    {
        if (! isset($this->$name)) {
            $class_name = ucfirst($name);
            $application = "\\Abbotton\\Eleme\\Request\\{$class_name}";
            if (! class_exists($application)) {
                throw new Exception($class_name.'不存在');
            }
            $this->$name = new $application($this->config, $this->client);
        }

        return $this->$name;
    }

    public function setHttpClient($client)
    {
        $this->client = $client;

        return $this;
    }
}
