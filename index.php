<?php
require_once 'vendor/autoload.php';

$config  = [
    'app_id' => '48992508',
    'app_secret' => '1oua4o4lwcm5',
    'access_token' => 'd9c95347-8029-4f41-b84c-946927be0964'
];

$app = new \Abbotton\Eleme\Application($config);
$res = $app->common->shopCategories(['level' => '1', 'category_id' => '166']);
var_dump(json_decode($res, true));
