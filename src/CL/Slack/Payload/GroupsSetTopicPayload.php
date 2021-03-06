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
 * @link Official documentation at https://api.slack.com/methods/groups.setTopic
 */
class GroupsSetTopicPayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $topic;

    /**
     * @param string $groupId ID of the group to remove user from
     *
     * @return GroupsSetTopicPayload
     */
    public function setGroupId($groupId)
    {
        $this->channel = $groupId;

        return $this;
    }

    /**
     * @return string ID of the group to remove user from
     */
    public function getGroupId()
    {
        return $this->channel;
    }

    /**
     * @param string $topic
     *
     * @return GroupsSetTopicPayload
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'groups.setTopic';
    }
}
