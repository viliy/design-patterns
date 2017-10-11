<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/11
 * Time: 18:46
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Responsibility;

/**
 * Class Responsibility
 * @package ZhaQ\DesignPatterns\Responsibility
 */
class Responsibility
{
    protected $levelWeight;

    protected $superior;

    public function getResult()
    {
        echo 'Responsibility' . PHP_EOL;
    }

    function getMaster()
    {
        $this->getResult();
    }
}