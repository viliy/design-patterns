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
 * Class Adapter
 * @package ZhaQ\DesignPatterns\AdapterPattern
 */
class Adapter extends Original implements Target
{

    public function mmp()
    {
        return [
            parent::mmp()
        ];
    }

    public function wtf()
    {
        return ['wtf'];
    }
}
