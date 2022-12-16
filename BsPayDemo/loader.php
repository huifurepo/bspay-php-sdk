<?php

namespace BsPayDemo;
use BsPaySdk\core\BsPay;

# 以下配置为开发联调时覆盖SDK的配置项，需在引入SDK的init.php之前配置以覆盖SDK初始配置
# 设置是否调试模式，不配置默认关闭：false
define("DEBUG", true);

# 设置调试日志路径，不配置默认为SDK同级的log目录下
define("LOG", dirname(__FILE__)."/log");

# 设置生产模式，不配置默认生产模式：true
//define("PROD_MODE", false);

# SDK 初始化文件加载
require_once  dirname(__FILE__). "/../BsPaySdk/init.php";

# 配置商户信息
require_once dirname(__FILE__) . "/constants/DemoConstants.php";

# init方法，从 config.json 加载系统参数
BsPay::init(dirname(__FILE__).'/config/config.json', false);

# 如果存在多套商户配置，可重复调用 init 方法，并置对应的key来区分多套商户配置,
# 后续使用对应的 key 来创建这个商户身份的斗拱接口调用实例对象
# 以刷卡模块举例：
#   使用 new ScanPayment() 创建的对象调用方法，将以上文初始化的 config.json 文件中的商户配置发起接口调用
#   使用 new ScanPayment("bk_merchant") 创建的对象调用方法，将以如下 config_bk3.json 文件中的商户配置发起接口调用
//BsPay::init(dirname(__FILE__).'/config/config_bk3.json', false, "bk_merchant");
