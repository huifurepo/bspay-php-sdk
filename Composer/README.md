# composer 支持

## 文件介绍

```
BsPayConfig.json   # 商户参数，包含 product_id 、公私钥等

BsPayConfig.php    # SDK初始配置项，主要作用是覆盖默认常量

README.md   # 使用说明
```

## 使用说明

以 laravel >= 5.0.0 版本为例：

1 .  composer 安装  huifurepo/dg-php-sdk

```
composer require huifurepo/dg-php-sdk
```

2 . 文件拷贝

```
    2.1 从对应包中查找BsPayConfig.json 和 BsPayConfig.php 文件并拷贝到项目对应配置文件目录下，如 /config/
    
    2.2 需要确保放置路径和 composer.json 的 autoload配置路径一致
```

3 .  composer 配置自动加载项；路径参考应用根目录下 composer.json 文件，添加如下 autoload 配置：
```
    "autoload": {
        ......
        "files": ["config/BsPayConfig.php","vendor/huifurepo/dg-php-sdk/BsPaySdk/init.php"],
        "classmap": ["vendor/huifurepo/dg-php-sdk/BsPaySdk"]
    },

```

4 .  执行命令，使配置生效
```
composer dumpautoload
```

5 .  引用方法；以 V2MerchantActivityAddRequest 为例，使用 composer 方式不需要重复使用 require_once 资源，直接使用命名空间方式引入即可；

```
    use BsPaySdk\core\BsPayClient;
    use BsPaySdk\request\V2MerchantActivityAddRequest;

    $request = new V2MerchantActivityAddRequest();
    // 请求日期
    $request->setReqDate(date("Ymd"));
    // 请求流水号
    $request->setReqSeqId(date("YmdHis").mt_rand());
    // 汇付客户Id
    $request->setHuifuId("6666000103627938");
    // 营业执照图片
    $request->setBlPhoto("42204258-967e-373c-88d2-1afa4c7bb8ef");
    // 店内环境图片
    $request->setDhPhoto("42204258-967e-373c-88d2-1afa4c7bb8ef");
    // 手续费类型
    $request->setFeeType("7");
    // 整体门面图片（门头照）
    $request->setMmPhoto("42204258-967e-373c-88d2-1afa4c7bb8ef");
    // 收银台照片
    $request->setSytPhoto("42204258-967e-373c-88d2-1afa4c7bb8ef");
    // 支付通道
    $request->setPayWay("W");

    // 设置非必填字段
    $extendInfoMap = [];
    $request->setExtendInfo($extendInfoMap);

    // 3. 发起API调用
    $client = new BsPayClient();
    $result = $client->postRequest($request);
    if (!$result || $result->isError()) {  //失败处理
        var_dump($result -> getErrorInfo());
    } else {    //成功处理
        var_dump($result);
    }
```

## 更多方法使用
    
    请参考对应 demo，使用 composer 方式配置自动加载后，引入方法不需要重复 require_once 资源，直接使用命名空间方式引入即可；
