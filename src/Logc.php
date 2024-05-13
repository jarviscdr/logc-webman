<?php

declare(strict_types=1);

namespace Jarviscdr\LogcWebman;

use Jarviscdr\LogcClient\Client;

/**
 * Logc class
 *
 * @author Jarvis
 * @date   2024-05-12 22:55
 */
class Logc implements \Webman\Bootstrap {
    /**
     * Logc启动引导
     *
     * @param Worker $worker
     *
     * @author Jarvis
     * @date   2024-05-12 22:55
     */
    public static function start($worker): void {
        $apiHost        = config('plugin.jarviscdr.logc-webman.app.api_host');
        $apiTimeout     = config('plugin.jarviscdr.logc-webman.app.api_timeout');
        $prjectName     = config('plugin.jarviscdr.logc-webman.app.project');
        $tags           = config('plugin.jarviscdr.logc-webman.app.tags');
        $throwException = config('plugin.jarviscdr.logc-webman.app.throw_exception');

        Client::getInstance()
            ->setApiClient($apiHost, $apiTimeout)
            ->setThrowException($throwException)
            ->setProject($prjectName)
            ->setTags($tags);
    }
}
