<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/11
 * Time: 18:47
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Responsibility;


class Fuck extends ResponsibilityAbstract
{
    protected $levelWeight = 1;

    public function getResult()
    {
        echo 'Fuck';
    }

    function getMaster($level = null)
    {
        if (!isset($level)) {
            $this->superior = new Responsibility();
            $this->superior->getMaster();
        }elseif ($level === $this->levelWeight) {
            $this->getResult();
        }else{
            $this->superior = new WTF();
            $this->superior->getMaster($level);
        }
    }
}