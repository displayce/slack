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
 * @link Official documentation at https://api.slack.com/methods/channels.invite
 */
class ChannelsInvitePayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $user;

    /**
     * @param string $channelId
     *
     * @return ChannelsInvitePayload
     */
    public function setChannelId($channelId)
    {
        $this->channel = $channelId;

        return $this;
    }

    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel;
    }

    /**
     * @param string $userId
     *
     * @return ChannelsInvitePayload
     */
    public function setUserId($userId)
    {
        $this->user = $userId;

        return $this;
    }

    /**
     * @return string
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
        return 'channels.invite';
    }
}
