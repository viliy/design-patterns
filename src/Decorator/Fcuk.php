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
    public $data;

    public function __construct($string)
    {
        $this->doStep($string);
    }

    /**
     * 当前流水线操作
     */
    public function doStep(string $string)
    {
        $this->data[] = $string;
    }
}
