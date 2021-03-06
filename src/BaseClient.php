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

/**
 * @author Ali Issa <ali@vinelab.com>
 */
abstract class BaseClient
{
    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    protected abstract function getServiceHost();

    protected abstract function getServicePort();

    public function __call($method, $arguments)
    {
        if (count($arguments) == 1) {
            $arguments[0]['url'] = $this->getServiceHost().':'.$this->getServicePort().$arguments[0]['url'];
            $request = array_pop($arguments);

            return $this->client->$method($request)->json();
        } else {
            $url = $this->getServiceHost().':'.$this->getServicePort().$arguments[0];
            $request = ['url' => $url, 'params' => $arguments[1]];

            return $this->client->$method($request)->json();
        }
    }
}
