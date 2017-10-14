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
     * @var
     */
    protected $decorator;

    /**
     * @var DecoratorBase
     */
    protected $component;

    /**
     * DecoratorAbstract constructor.
     * @param DecoratorBase $component
     */
    public function __construct(DecoratorBase $component)
    {
        $this->component = $component;
    }

    /**
     * @param $string
     */
    public function doStep(string $string)
    {
        $this->component->data[] = $string;
        return $this->component;
    }
}
