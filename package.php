<?php
namespace BsPaySdk;

require_once  dirname(__FILE__). "/BsPaySdk/init.php";

$rootDir = opendir(dirname(__FILE__));
$packageName = "php_sdk_" . substr_replace(SDK_VERSION, "", 0, 4) . "_" . date("Ymd");
$build = dirname(__FILE__) . "/" . $packageName;

if (is_dir($build)) {
    del_tree($build);
    unlink($packageName.".zip");
}
mkdir($build, 0777, true);

# 将被过滤掉的打包文件
$filter = array(
    "/\blog\b/i",                   // 排除 log
    "/\bconfig_[\w]*.json\b/i",     // 排除测试用的 config
    "/\bjson_bak.json\b/i",          // 排除测试用的 config
    "/\bpackage.php\b/i",          // 排除打包脚本自身
    "/\bphp_sdk_v[\w]*\b/i",          // 排除打包文件夹
    "/\bWORK_FLOW.md\b/i",          // 排除内部文件
    "/\ServerImage\b/i",                   // 排除服务镜像文件夹
);

# do copy
while ($file = readdir($rootDir)) {
    // filter
    if (substr(strtolower($file), 0, 1) == "." || match_name($file, $filter)) {
        continue;
    }

    echo $file . "\n";
    if (is_dir($file)) {
        full_copy($file, $build . "/" . $file, $filter);
    } else {
        copy($file, $build . "/" . $file);
    }
}

# do zip(只在mac系统下执行，其他操作系统保留build目录自行手动处理)
if (PHP_OS == "Darwin") {
    $shell = "zip -q -r $packageName.zip ./$packageName";
    echo $shell;
    system($shell, $status);

    # delete temp file
    del_tree($build);
}

# =====================================================

/**
 * 复制文件夹及内部文件
 *
 * @param $source
 * @param $target
 * @param null $filter
 */
function full_copy($source, $target, $filter=null)
{
    if (is_dir($source)) {
        mkdir($target);
        $d = dir($source);
        while (FALSE !== ($entry = $d->read())) {
            if ($entry == '.' || $entry == '..' || match_name($entry, $filter)) {
                continue;
            }
            $Entry = $source . '/' . $entry;
            if (is_dir($Entry)) {
                full_copy($Entry, $target . '/' . $entry, $filter);
                continue;
            }
            copy($Entry, $target . '/' . $entry);
        }

        $d->close();
    } else {
        copy($source, $target);
    }
}

/**
 * 删除文件夹及内部文件
 *
 * @param $dir
 * @return bool
 */
function del_tree($dir)
{
    $files = array_diff(scandir($dir), array('.', '..'));
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? del_tree("$dir/$file") : unlink("$dir/$file");
    }
    return rmdir($dir);
}

/**
 * 判断名称是否匹配集合
 *
 * @param string $name
 * @param array $set  正则表达式集合
 * @return bool|void
 */
function match_name($name, $set)
{
    foreach ($set as $value) {
        if (preg_match($value, $name)) {
            return true;
        }
    }
}
