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

    abstract protected function getServiceHost();

    abstract protected function getServicePort();

}
