<?php

declare(strict_types=1);

/*
 * This file is part of Bitbucket API Client.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bitbucket\Api\Workspaces;

use Bitbucket\Api\AbstractApi;
use Http\Client\Common\HttpMethodsClientInterface;

/**
 * The abstract workspace api class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
abstract class AbstractWorkspacesApi extends AbstractApi
{
    /**
     * The workspace.
     *
     * @var string
     */
    protected $workspace;

    /**
     * Create a new api instance.
     *
     * @param \Http\Client\Common\HttpMethodsClientInterface $client
     * @param string                                         $workspace
     */
    public function __construct(HttpMethodsClientInterface $client, string $workspace)
    {
        parent::__construct($client);
        $this->workspace = $workspace;
    }
}