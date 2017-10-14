<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/14
 * Time: 15:37
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\StrategyPattern;


class MmpAlgorithm implements Strategy
{
    /**
     * @param array $config
     */
    public function getResult($config = [])
    {
        self::checkConfig($config);

        echo "Mmp 算法: {$config['name']} 的算法" . PHP_EOL;

    }

    /**
     * 参数检查
     *
     * @param array $config
     */
    public static function checkConfig($config = [])
    {
        if (empty($config) || !is_array($config)) {
            throw new \InvalidArgumentException('config must be an array');
        }
    }
}
