<?php
/**
 * User: ZhaQiu
 * Date: 2017/8/1
 * Time: 17:18
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Factory;

/**
 * Class ApiFactory
 * @package ZhaQ\DesignPatterns\Factory
 */
class ApiFactory
{
    /**
     * @param $api
     * @return mixed
     */
    public static function getApiObj($api)
    {
        $className = __NAMESPACE__ . '\Api\\' . ucfirst($api);

        if (!class_exists($className)) {
            throw new \InvalidArgumentException("Missing {$api} class.");
        }

        return new $className();
    }
}
