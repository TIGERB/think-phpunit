<?php
namespace Test;

// 初始化app
define('ROOT_PATH', $_SERVER['PWD'] . '/');
define('APP_PATH', $_SERVER['PWD'] . '/application/');
require __DIR__ . '/../thinkphp/base.php';
require __DIR__ . '/../thinkphp/helper.php';

use think\Loader;

// 注册命名空间
Loader::addNamespace('app', __DIR__ . '/../application');

class TestCase extends PHPUnit\Framework\TestCase
{

}
