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

 use Vinelab\Http\Client as HttpClient;
 use Trellis\Clients\ServiceDomain;

 /**
 * @author Ali Issa <ali@vinelab.com>
 */

class GraphClient{

    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    public function __call($method, $arguments)
    {
        $arguments[0]['url'] = ServiceDomain::GRAPH_Service_URL . $arguments[0]['url'];

        $request = array_pop($arguments);

        return $this->client->$method($request)->json();
    }

}
