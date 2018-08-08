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
 * @link Official documentation at https://api.slack.com/methods/groups.history
 */
class GroupsHistoryPayload extends AbstractPayload
{
    /**
     * Slack seems to want to call this option "channel", but I can't agree with that (the format of the value is different),
     * and will just pretend to my users it's a "group" (ID).
     *
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $oldest;

    /**
     * @var string
     */
    private $latest;

    /**
     * @var int
     */
    private $count;

    /**
     * @var bool
     */
    private $inclusive;

    /**
     * @param string $groupId ID of the group to clone and archive.
     *
     * @return GroupsHistoryPayload
     */
    public function setGroupId($groupId)
    {
        $this->channel = $groupId;

        return $this;
    }

    /**
     * @return string ID of the group to clone and archive.
     */
    public function getGroupId()
    {
        return $this->channel;
    }

    /**
     * @param string|string|null $latest
     *
     * @return GroupsHistoryPayload
     */
    public function setLatest($latest = null)
    {
        $this->latest = $latest;

        return $this;
    }

    /**
     * @return string|string|null
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * @param string|null $oldest
     *
     * @return GroupsHistoryPayload
     */
    public function setOldest($oldest = null)
    {
        $this->oldest = $oldest;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOldest()
    {
        return $this->oldest;
    }

    /**
     * @param int|null $count
     *
     * @return GroupsHistoryPayload
     */
    public function setCount($count = null)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param bool $inclusive
     *
     * @return GroupsHistoryPayload
     */
    public function setInclusive($inclusive)
    {
        $this->inclusive = $inclusive;

        return $this;
    }

    /**
     * @return bool
     */
    public function getInclusive()
    {
        return $this->inclusive;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'groups.history';
    }
}
