<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/14
 * Time: 16:07
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Decorator;

/**
 * 装饰统一实现步骤
 *
 * Interface DecoratorBase
 * @package ZhaQ\DesignPatterns\DecoratorBase
 */
abstract class DecoratorBase
{
    protected $data = [];

    protected $content;

    public function getData()
    {
        return $this->data;
    }

    abstract public function doStep();
}
