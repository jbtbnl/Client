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

namespace Bitbucket\Api\Snippets\Workspaces;

/**
 * The watching api class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Watching extends AbstractWorkspacesApi
{
    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function check(array $params = [])
    {
        $path = $this->buildWatchingPath();

        return $this->get($path, $params);
    }

    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function watch(array $params = [])
    {
        $path = $this->buildWatchingPath();

        return $this->put($path, $params);
    }

    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function ignore(array $params = [])
    {
        $path = $this->buildWatchingPath();

        return $this->delete($path, $params);
    }

    /**
     * Build the watching path from the given parts.
     *
     * @param string ...$parts
     *
     * @return string
     */
    protected function buildWatchingPath(string ...$parts)
    {
        return static::buildPath('snippets', $this->workspace, $this->snippet, 'watch', ...$parts);
    }
}