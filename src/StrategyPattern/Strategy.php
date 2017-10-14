<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/14
 * Time: 15:28
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\StrategyPattern;


interface Strategy
{
    /**
     * 算法统一结果输出方法
     *
     * @param array $config
     */
    public function getResult($config = []);

    /**
     * 参数检查
     *
     * @param array $config
     */
    public static function checkConfig($config = []);
}