<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/14
 * Time: 16:12
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Decorator;

/**
 * Class DecoratorAbstract
 * @package ZhaQ\DesignPatterns\Decorator
 */
abstract class DecoratorAbstract extends DecoratorBase
{
    /**
     * @var DecoratorBase
     */
    protected $component;

    /**
     * @var
     */
    protected $content;

    /**
     * DecoratorAbstract constructor.
     * @param DecoratorBase $component
     */
    public function __construct(DecoratorBase $component)
    {
        $this->component = $component;
    }


    /**
     * @return array
     */
    public function doStep()
    {
        echo get_called_class() . PHP_EOL;

        return $this->data;
    }

    public function getComponent()
    {
        return $this->component;
    }
}
