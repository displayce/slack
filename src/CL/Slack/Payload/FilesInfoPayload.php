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
 * @link Official documentation at https://api.slack.com/methods/files.info
 */
class FilesInfoPayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $file;

    /**
     * @var int|null
     */
    private $count;

    /**
     * @var int|null
     */
    private $page;

    /**
     * @param int|null $count
     *
     * @return FilesInfoPayload
     */
    public function setCount($count)
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
     * @param string $file
     *
     * @return FilesInfoPayload
     */
    public function setFileId($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileId()
    {
        return $this->file;
    }

    /**
     * @param int|null $page
     *
     * @return FilesInfoPayload
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'files.info';
    }
}
