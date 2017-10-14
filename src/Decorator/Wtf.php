<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/14
 * Time: 16:18
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Decorator;


class Wtf extends DecoratorAbstract
{

    public function __construct(DecoratorBase $component)
    {
        parent::__construct($component);
        $this->component->doStep('WTF');
    }
}
