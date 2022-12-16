# 简介

为了提高客户接入的便捷性，本系统提供 SDK 方式介入，使用本 SDK 将极大的简化开发者的工作，开发者将无需考虑通信、签名、验签等，只需要关注业务参数的输入。

# 下载地址

[SDK下载](https://paas.huifu.com/partners/devtools/#/sdk_php)

# 版本记录

| 版本 | 日期 | 版本说明 | 
| :--- | :--- | :--- | 
| v1.0.0 | 2021/05/06 | 初始版本 |
| v1.0.1 | 2021/08/23 | 实现通用接口请求客户端演示demo，实现部分支付功能的封装 |
| v1.1.0 | 2021/10/12 | 对接新版斗拱 API 接口 |
| v1.1.1 | 2021/11/02 | 封装余额支付、取现、代发模块对象 |
| v1.1.2 | 2021/12/08 | 1. 封装快捷代扣、延时交易、商户管理模块； <br>2. 优化 huifuid 方法参数，默认从配置文件中读取 |
| v1.1.3 | 2021/12/13 | 1. 优化 huifuid 方法参数 <br>2. 调整Demo 中 config.json 公私字段的命名<br>3. 优化接口通讯安全处理 |
| v1.1.4 | 2021/12/21 | 1. 修复扫码接口地址问题 <br>2. 修复扫码支付模块支付类型对象数据格式化问题 |
| v1.1.5 | 2022/01/19 | 1. 封装微信、支付宝、云闪付商户管理模块对象；<br>2. 封装分账用户管理模块对象 |
| v1.1.6 | 2022/04/21 | 1. 封装支付宝花呗分期模块对象；<br>2. 封装终端报备模块对象；<br>3. 封装银行卡分期模块对象；<br>4. 封装交易取现、出金交易查询模块对象；<br>5. 封装智能终端模块对象；<br>6. 封装交易确认模块对象；<br>7. 升级商户管理、快捷代扣、线上交易的部分接口为V2版本； |
| v1.1.7 | 2022/05/05 | 1. 实现机构列表查询功能封装；<br>2. 实现商户关系绑定功能封装；<br>3. 实现机构下属商户查询功能封装；<br>4. 升级商户图片上传接口为V2版本； |
| v1.1.8 | 2022/05/12 | 1. 实现支付托管H5、PC、支付宝小程序、微信小程序预下单功能封装；<br>2. 补充验签工具使用说明； |
| v1.1.9 | 2022/07/14 | 1. 网银支付页面版、手机网页支付、快捷支付页面版接口只加签不验签；<br>2. 商户图片上传接口免加解签；<br>3. 优化预下单功能封装； |
| v2.0.0 | 2022/09/16 | 1. 类名按资源路径生成；<br>2. demo中字段说明更详细； |

# 版本要求

PHP 版本 5.6 及以上

# SDK 包结构说明

**BsPaySdk** 目录下内容为待添加到项目中的文件；

**BsPayDemo** 目录下为示例项目，供接入时参考使用；

# 使用方法

### 1. 将 **BsPaySdk** 目录下文件内容整体复制到您的项目工程内

### 2. 在您的项目创建 SDK 初始化的入口文件，完成如下配置：

#### 2.1 进行相关环境及调试参数的配置

   ```
    # 设置是否调试模式，不配置默认关闭：false
    define("DEBUG", true);
    
    # 设置调试日志路径，不配置默认为SDK同级的log目录下
    define("LOG", dirname(__FILE__)."/log");
    
    # 设置生产模式，不配置默认生产模式：true，设置为 false 时调用联调测试环境
    define("PROD_MODE", true);
   ```

#### 2.2 完成 sdk 初始化

   ```
    # 加载 SDK 初始化文件
    require_once  dirname(__FILE__). "/../BsPaySdk/init.php";
   ```

#### 2.3 完成系统参数的导入

   ```
    # 从文件导入商户系统参数
    BsPay::init(dirname(__FILE__). '/config/config_merch_default.json', false);
    
    # sdk也支持追加多套系统参数，并可以在调用接口时进行切换，适用于下辖多商户的系统接入
    BsPay::init(dirname(__FILE__). '/config/config_merch_2.json', false, "merchantKey2");
    BsPay::init(dirname(__FILE__). '/config/config_merch_3.json', false, "merchantKey3");
    ...
   ```
   
#### 2.4 **以上内容，建议参考 SDK Demo 中 loader.php 文件内的代码写法**

### 3. SDK 调用方法（一）：使用接口 request 实例调用，以商户业务开通接口为例

#### 3.1 导入前一步实现的 SDK 初始化文件

   ```
   # 导入初始化内容
   require_once dirname(__FILE__) . "/loader.php";
   require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiOpenRequest.php";
   ```

#### 3.2 根据接口文档说明，创建对应请求的参数数据体

   ```
    # 请求必填参数
    $request = new V2MerchantBusiOpenRequest();
    // 请求流水号
    $request->setReqSeqId(date("YmdHis").mt_rand());
    // 请求日期
    $request->setReqDate(date("Ymd"));
    // 汇付ID
    $request->setHuifuId("6666000104778898");
    // 渠道商汇付ID
    $request->setUpperHuifuId("6666000003080000");
    
    # 请求拓展参数 (可选)
    $extendInfoMap = getExtendInfos() ;
    $request->setExtendInfo($extendInfoMap);
   ```

#### 3.3 调用接口

   ```
   # 创建请求Client对象，调用接口
    $client = new BsPayClient();
    $result = $client->postRequest($request);
   ```

#### 3.4 处理返回结果

   ```
   # 成功/失败应答的处理
   if (!$result || $result->isError()){  //失败处理
       var_dump($result -> getErrorInfo());
   } else {    //成功处理
       var_dump($result);
   }
   ```

#### 3.5 **以上内容，建议参考 SDK Demo 中 V2MerchantBusiOpenRequestDemo.php 文件内的代码写法**

### 4. SDK 调用方法（二）：使用集中传参方式调用，以商户业务开通接口为例

   除基于接口 request 实例调用外，另提供一种集中传参方式，拓展适应不同需求；

#### 4.1 导入前一步实现的 SDK 初始化文件

   ```
   # 导入初始化内容
   require_once dirname(__FILE__) . "/loader.php";
   require_once  dirname(__FILE__). "/../BsPaySdk/request/V2MerchantBusiOpenRequest.php";
   ```

#### 4.2 根据接口文档说明，创建对应请求的参数数据体

   ```
    # 请求实例
    $request = new V2MerchantBusiOpenRequest();
    
    // 请求参数，不区分必填和可选，按照 api 文档 data 参数结构依次传入
    $param = array(
        "funcCode" => $request->getFunctionCode(),
        "params" => array(
            "req_seq_id" => date("YmdHis").mt_rand(),
            "req_date" => date("Ymd"),
            "huifu_id" => "6666000104778898",
            "upper_huifu_id" => "6666000003080000",
            "balance_pay_config" => json_encode(array(
                "fee_rate" =>"2",
                "fee_fix_amt" =>"1",
            ),JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES),
        ),
    );
   ```

#### 4.3 调用接口

   ```
   # 创建请求Client对象，调用接口
    $client = new BsPayClient();
    $result = $client->postRequest($param);
   ```

#### 4.4 处理返回结果

   ```
   # 成功/失败应答的处理
   if (!$result || $result->isError()){  //失败处理
       var_dump($result -> getErrorInfo());
   } else {    //成功处理
       var_dump($result);
   }
   ```

### 5 验签工具（BsPayTools.php）

* 校验签名 - verifySign_sort

    （此方法为返回报文签名验签，将返回data 按字母顺序排序后组成json 字符串，依据 RSA2 算法使用公钥进行验签

    示例：
```
$data = array(
    'bank_code' =>'10000',
    'bank_message' =>'Success',
    'hf_seq_id' =>'002900TOP2B220511142822P984ac132ff400000',
    'huifu_id' =>'6666000108854952',
    'qr_code' =>'https://qr.alipay.com/bax04465kcijedllqhuq004b',
    'req_date' =>'20220511',
    'req_seq_id' =>'202205111428211506200',
    'resp_code' =>'00000100',
    'resp_desc' =>'下单成功',
    'trade_type' =>'A_NATIVE',
    'trans_amt' =>'1.00',
    'trans_stat' =>'P',
);
$sign = "OUotiU75VW7SdEwLIZX3gAqSgZk8hCjE7r01WQr8mDdm23B+zd58r8HNWvE9BWV+mTwZ2iAOSuht9SOGM+spSYFANa3VIqMZzGim3y4aZmptQTTptNcclocsWyocn78efdAuTcGvf5dhUc6/Ue1oYV+BVhphYPmkKUKfxpEvBEvw/vlpsCu0I0Dx/k7kN6IaxY6mODypFmDtnEaZbkGaxbh8yxH1lJDn5/91YfD6vpK+sRJXiVXLzDK13BPAjQ3RAlFUxHJ8LPJbWQQpABQ94Gd1TTc/bfOluqUwJJbofC7WZiIOW6MKsa9gL5Y6lmbqFcMBKfvexJ0SlRFLWvSkQg==";
$merConfig = BsPay::getConfig();
$result = BsPayTools::verifySign_sort($sign,$data,$merConfig->rsa_huifu_public_key);
```

  * 校验 webhook 返回报文签名 - verify_webhook_sign
  
    （此方法为异步回调验签方法，将返回 data 字符串与商户配置的key 组合后进行md5计算，返回的md5值与回调sign的比较结果
  
    示例：
```
$data = array(
    'bank_code' =>'10000',
    'bank_message' =>'Success',
    'hf_seq_id' =>'002900TOP2B220511142822P984ac132ff400000',
    'huifu_id' =>'6666000108854952',
    'qr_code' =>'https://qr.alipay.com/bax04465kcijedllqhuq004b',
    'req_date' =>'20220511',
    'req_seq_id' =>'202205111428211506200',
    'resp_code' =>'00000100',
    'resp_desc' =>'下单成功',
    'trade_type' =>'A_NATIVE',
    'trans_amt' =>'1.00',
    'trans_stat' =>'P',
);
$sign = 'dcc64089c44ea77cfde785de4cfa97ba';
$key = 'test_key';
$result = BsPayTools::verify_webhook_sign($sign,$data,$key);
```

