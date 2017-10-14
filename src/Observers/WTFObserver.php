<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/12
 * Time: 18:02
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace ZhaQ\DesignPatterns\Observers;


use SplSubject;

class WTFObserver implements \SplObserver
{

    /**
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        echo get_class($subject) . ' wtf mother fuck' . PHP_EOL;
    }
}
