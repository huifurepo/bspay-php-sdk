<?php

namespace BsPaySdk;

ini_set('date.timezone', 'Asia/Shanghai');
if (!defined("SDK_BASE")) {
    define("SDK_BASE", dirname(__FILE__));
}

# sdk 版本号
if (!defined("SDK_VERSION")) {
    define("SDK_VERSION", "php#v2.0.16");
}

# api 接口版本号
if (!defined("API_VERSION")) {
    define("API_VERSION", "2.0.0");
}

# 设置是否调试模式
if (!defined("DEBUG")) {
    define("DEBUG", false);
}

# 设置调试日志路径
if (!defined("LOG")) {
    define("LOG", dirname(SDK_BASE) . "/log");
}

# 设置生产模式
if (!defined("PROD_MODE")) {
    define("PROD_MODE", true);
}

# 基础 Core 类
require_once SDK_BASE . "/config/MerConfig.php";
require_once SDK_BASE . "/core/BsPayRequestV2.php";
require_once SDK_BASE . "/core/BsPayTools.php";
require_once SDK_BASE . "/core/BsPay.php";
require_once SDK_BASE . "/core/BsPayClient.php";
require_once SDK_BASE . "/request/BaseRequest.php";
require_once SDK_BASE . "/enums/FunctionCodeEnum.php";


