<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/17
 * Time: 16:40
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\AdapterPattern;

/**
 * Class AdapterClass
 * @package ZhaQ\DesignPatterns\AdapterPattern
 */
class AdapterClass implements Target
{
    protected $original;

    public function __construct(Original $original)
    {
        $this->original = $original;
    }

    public function mmp()
    {
        return [
            $this->original->mmp()
        ];
    }

    public function wtf()
    {
        return ['wtf'];
    }
}
