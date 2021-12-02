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
| [公共](https://open-retail.ele.me/#/apidoc?type=api_menu&categoryCode=common_all&page=1&pageSize=100) | $app->common |
| [营销](https://open-retail.ele.me/#/apidoc?type=api_menu&categoryCode=activity_all&page=1&pageSize=100) | $app->activity |
| [订单](https://open-retail.ele.me/#/apidoc?type=api_menu&categoryCode=order_all&page=1&pageSize=100) | $app->order |
| [药品](https://open-retail.ele.me/#/apidoc?type=api_menu&categoryCode=drug_all&page=1&pageSize=100) | $app->prescription |
| [商户](https://open-retail.ele.me/#/apidoc?type=api_menu&categoryCode=shop_all&page=1&pageSize=100) | $app->shop |
| [商品](https://open-retail.ele.me/#/apidoc?type=api_menu&categoryCode=item_all&page=1&pageSize=100) | $app->sku |
| [评论](https://open-retail.ele.me/#/apidoc?type=api_menu&categoryCode=ugc_all&page=1&pageSize=100) | $app->ugc |
| [CPC竞价服务](https://open-retail.ele.me/#/apidoc?type=api_menu&categoryCode=cpc_all&page=1&pageSize=100) | $app->cpc |
| [店铺装修](https://open-retail.ele.me/#/apidoc?type=api_menu&categoryCode=decorate_all&page=1&pageSize=100) | $app->decorate |

### Change Log
* 2020年07月20日
    - v1.0.0发布 :sparkles:
    
* 2021年01月11日
    - v1.0.6发布
        - 完善单元测试
        - 同步官方接口
        - 其他细微调整
    
* 2021年01月12日
    - v1.0.8发布
        - 将composer.lock文件加入到版本库
        - 修改guzzlehttp组件版本号
    
* 2021年02月19日
    - v1.0.9发布
        - 修改access_token为可选项

* 2021年03月30日
    - v1.0.10发布
        - 修复未设置access_token时报错的问题

* 2021年04月30日
    - v1.0.11发布
        - 添加多个新的接口
        - 标记部分接口为已废弃
        - 修改部分方法名称,使其符合小驼峰命名规则
        
* 2021年09月07日
    - v1.1.0发布
        - 同步官方最新接口
        - 集成Github Action
        - 移除StyleCi等第三方服务

* 2021年09月21日
    - v1.1.1发布
        - 同步官方最新接口

* 2021年10月27日
    - v1.1.2发布
        - 同步官方最新接口

* 2021年12月02日
  - v1.1.3发布
      - 同步官方最新接口