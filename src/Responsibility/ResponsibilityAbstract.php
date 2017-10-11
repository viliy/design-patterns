<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/11
 * Time: 18:48
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Responsibility;

/**
 * Class ResponsibilityAbstract
 * @package ZhaQ\DesignPatterns\Responsibility
 */
abstract class ResponsibilityAbstract
{
    protected $levelWeight;

    protected $superior;

    abstract function getMaster();

    abstract function getResult();
}