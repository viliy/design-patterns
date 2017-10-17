<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/14
 * Time: 15:52
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

require __DIR__ .'/vendor/autoload.php';

$mmp = new \ZhaQ\DesignPatterns\StrategyPattern\MmpAlgorithm();
$wtf = new \ZhaQ\DesignPatterns\StrategyPattern\WtfAlgorithm();

$config = [
    'name' => 'JanHuang And Runner'
];

$objMmp = new \ZhaQ\DesignPatterns\StrategyPattern\ServiceProvider($mmp);

$objMmp->getResult($config);

$objWtf = new \ZhaQ\DesignPatterns\StrategyPattern\ServiceProvider($wtf);

$objWtf->getResult($config);