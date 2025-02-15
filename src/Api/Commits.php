<?php

declare(strict_types=1);

/*
 * This file is part of the Gitlab API library.
 *
 * (c) Matt Humphrey <matth@windsor-telecom.co.uk>
 * (c) Graham Campbell <hello@gjcampbell.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gitlab\Api;

class Commits extends AbstractApi
{
    public function mergeRequests($project_id, string $sha): mixed
    {
        return $this->get($this->getProjectPath($project_id, 'repository/commits/'.self::encodePath($sha).'/merge_requests'));
    }
}
