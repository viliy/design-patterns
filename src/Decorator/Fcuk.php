<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/14
 * Time: 16:32
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Decorator;


class Fcuk extends DecoratorBase
{
    public function __construct($string)
    {
        $this->data[] = $string;
    }

    public function doStep()
    {
        return $this->data;
    }
}
