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
 * @link Official documentation at https://api.slack.com/methods/channels.unarchive
 */
class ChannelsUnarchivePayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @param string $channelId
     *
     * @return ChannelsUnarchivePayload
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
     * @return string
     */
    public function getMethod()
    {
        return 'channels.unarchive';
    }
}
