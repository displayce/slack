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
 * @link Official documentation at https://api.slack.com/methods/groups.setPurpose
 */
class GroupsSetPurposePayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $purpose;

    /**
     * @param string $groupId ID of the group to remove user from
     *
     * @return GroupsSetPurposePayload
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
     * @param string $purpose
     *
     * @return GroupsSetPurposePayload
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'groups.setPurpose';
    }
}
