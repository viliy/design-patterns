<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/11
 * Time: 18:17
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Instance;


final class Instance
{
    /**
     * 用来保存对象的私有属性。
     * 因为要在实例化之前判断，所以此属性为静态的。
     *
     * @var
     */
    public static $instance;

    /**
     * 方法前面加 final 代表不能重写，类前面加 final 代表不能被继承。
     *
     * Instance constructor.
     */
    final protected function __construct()
    {
    }

    /**
     * 克隆方法私有化，避免外部克隆。
     */
    final private function __clone()
    {
    }

    /**
     * @return Instance
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Instance();
        }
        return self::$instance;
    }

    public function mmp()
    {
        echo 'God';
    }

    public function fuck()
    {
        echo 'Fuck';
    }
}
