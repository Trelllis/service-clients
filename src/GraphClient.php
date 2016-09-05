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

// use Vinelab\Http\Client as HttpClient;
 use Trellis\Clients\ServiceDomain;

 /**
 * @author Ali Issa <ali@vinelab.com>
 */

class GraphClient extends BaseClient {

    public function getServiceHost()
    {
        return env('GRAPH_SERVICE_HOST');
    }

    public function getServicePort()
    {
        return env('GRAPH_SERVICE_PORT');
    }
}
