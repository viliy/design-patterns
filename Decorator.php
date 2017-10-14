<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/14
 * Time: 16:29
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */
require __DIR__ .'/vendor/autoload.php';

$fuck = new \ZhaQ\DesignPatterns\Decorator\Fcuk('FUCK');

var_dump($fuck->data);

$mmp = new \ZhaQ\DesignPatterns\Decorator\Mmp($fuck);

var_dump($fuck->data);


$wtf = new \ZhaQ\DesignPatterns\Decorator\Wtf($mmp);


var_dump($fuck->data);


