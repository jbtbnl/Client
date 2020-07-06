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
 * The commits api class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Commits extends AbstractWorkspacesApi
{
    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function list(array $params = [])
    {
        $path = $this->buildCommitsPath();

        return $this->get($path, $params);
    }

    /**
     * @param string $commit
     * @param array  $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function show(string $commit, array $params = [])
    {
        $path = $this->buildCommitsPath($commit);

        return $this->get($path, $params);
    }

    /**
     * Build the commits path from the given parts.
     *
     * @param string ...$parts
     *
     * @return string
     */
    protected function buildCommitsPath(string ...$parts)
    {
        return static::buildPath('snippets', $this->workspace, $this->snippet, 'commits', ...$parts);
    }
}