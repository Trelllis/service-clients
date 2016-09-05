<?php

/*
 * This file is part of the backend package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 namespace Trellis\Clients;

 /**
 * @author Ali Issa <ali@vinelab.com>
 */

class RedisClient extends BaseClient {

    public function getServiceHost()
    {
        return env('REDIS_SERVICE_HOST');
    }

    public function getServicePort()
    {
        return env('REDIS_SERVICE_PORT');
    }

}
