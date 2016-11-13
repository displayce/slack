<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Model;

/**
 * @author Alexis MARQUIS <alexis@marquis.me>
 *
 * @link Official documentation at https://api.slack.com/docs/message-buttons
 */
class AttachmentConfirm extends AbstractModel
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $okText;

    /**
     * @var string
     */
    private $dismissText;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getOkText()
    {
        return $this->okText;
    }

    /**
     * @param string $okText
     */
    public function setOkText($okText)
    {
        $this->okText = $okText;
    }

    /**
     * @return string
     */
    public function getDismissText()
    {
        return $this->dismissText;
    }

    /**
     * @param string $dismissText
     */
    public function setDismissText($dismissText)
    {
        $this->dismissText = $dismissText;
    }

}