<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/11
 * Time: 19:14
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */
require __DIR__ .'/vendor/autoload.php';

$observer = new \ZhaQ\DesignPatterns\Observers\God();

$observer->attach(new \ZhaQ\DesignPatterns\Observers\MMPObserver());
$observer->attach(new \ZhaQ\DesignPatterns\Observers\WTFObserver());

$observer->notify();