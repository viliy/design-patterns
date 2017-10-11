<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/11
 * Time: 18:47
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Responsibility;


class MMP extends ResponsibilityAbstract
{
    protected $levelWeight = 3;

    public function getResult()
    {
        echo 'MMP';
    }

    function getMaster($level = null)
    {
        if ($level === $this->levelWeight) {
            $this->getResult();
        }else{
            $this->superior = new Responsibility();
            $this->superior->getMaster();
        }
    }
}