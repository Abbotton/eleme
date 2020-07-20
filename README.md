## 饿了么零售开放平台 PHP SDK
:clap:饿了么零售开放平台 PHP SDK:kissing_heart::kissing_heart:

### 安装
```shell script
composer require abbotton/eleme
```

### 使用
```php
<?php
use Abbotton\Eleme\Application;
......
$config = [
    'app_id' => 'xxx',
    'app_secret' => 'xxx',
    'access_token' => 'xxx'
];
$app = new Application($config);
// 获取商户分类
$result = $app->common->shopCategories(['level' => '1', 'category_id' => '166']);
var_dump(json_decode($result, true));
```

### 模块与类的对应关系
| 模块名称 | 对应类 |
| ----: | :---- |
| [公共](https://open-be.ele.me/dev/api/apidoc#/%E5%85%AC%E5%85%B1) | $app->common |
| [营销](https://open-be.ele.me/dev/api/apidoc#/%E8%90%A5%E9%94%80) | $app->activity |
| [订单](https://open-be.ele.me/dev/api/apidoc#/%E8%AE%A2%E5%8D%95) | $app->order |
| [药品相关](https://open-be.ele.me/dev/api/apidoc#/detail/drug.prescription.files) | $app->prescription |
| [商户](https://open-be.ele.me/dev/api/apidoc#/%E5%95%86%E6%88%B7) | $app->shop |
| [商品](https://open-be.ele.me/dev/api/apidoc#/%E5%95%86%E5%93%81) | $app->sku |
| [评论相关](https://open-be.ele.me/dev/api/apidoc#/detail/ugc.reply) | $app->ugc |

### Change Log
* 2020年07月20日
    - v1.0.0发布 :sparkles:
