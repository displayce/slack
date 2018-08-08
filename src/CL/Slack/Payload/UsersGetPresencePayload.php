<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @link Official documentation at https://api.slack.com/methods/presence.set
 */
class UsersGetPresencePayload extends AbstractPayload
{
    /**
     * @var string ID of the user
     */
    private $user;

    /**
     * @param $user ID of the user
     *
     * @return UsersGetPresencePayload
     */
    public function setUserId($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string ID of the user
     */
    public function getUserId()
    {
        return $this->user;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'users.getPresence';
    }
}
