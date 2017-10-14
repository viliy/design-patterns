<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/14
 * Time: 15:47
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\StrategyPattern;


class ServiceProvider
{
    /**
     * 算法类
     *
     * @var Strategy
     */
    private $service;

    /**
     * 初始化所需的算法服务
     *
     * ServiceProvider constructor.
     * @param Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->service = $strategy;
    }

    /**
     * 输出算法结果
     *
     * @param array $config
     * @return mixed
     */
    public function getResult($config = [])
    {
        return $this->service->getResult($config);
    }
}
