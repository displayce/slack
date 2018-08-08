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
 * @link Official documentation at https://api.slack.com/methods/channels.list
 */
class ChannelsListPayload extends AbstractPayload
{
    /**
     * @var bool
     */
    private $excludeArchived;

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'channels.list';
    }

    /**
     * @param bool $excludeArchived
     *
     * @return ChannelsListPayload
     */
    public function setExcludeArchived($excludeArchived)
    {
        $this->excludeArchived = $excludeArchived;

        return $this;
    }

    /**
     * @return bool
     */
    public function isExcludeArchived()
    {
        return $this->excludeArchived;
    }
}
