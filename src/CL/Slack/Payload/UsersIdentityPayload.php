<?php

/*
 * This user is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * user that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Alexis MARQUIS <alexis@marquis.me>
 *
 * @link Official documentation at https://api.slack.com/methods/users.identity
 */
class UsersIdentityPayload extends AbstractPayload
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'users.identity';
    }
}
