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

use CL\Slack\Model\Attachment;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Serializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @link Official documentation at https://api.slack.com/methods/chat.postMessage
 */
class ChatPostMessagePayload extends AbstractPayload implements AdvancedSerializeInterface
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $username;

    /**
     * @var bool
     */
    private $asUser;

    /**
     * @var string
     */
    private $iconEmoji;

    /**
     * @var string
     */
    private $iconUrl;

    /**
     * @var bool
     */
    private $unfurlLinks;

    /**
     * @var bool
     */
    private $unfurlMedia;

    /**
     * @var bool
     */
    private $linkNames;

    /**
     * @var string
     */
    private $parse;

    /**
     * @var Attachment[]|ArrayCollection
     */
    private $attachments;

    /**
     * @var string
     */
    private $attachmentsJson;

    public function __construct()
    {
        $this->attachments = new ArrayCollection();
    }

    /**
     * Sets the channel to send the message to.
     * Can be a public channel, private group, IM channel, encoded ID, or a name.
     *
     * @param string $channel
     *
     * @return ChatPostMessagePayload
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return string The channel to send the message to.
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $text Actual message to send.
     *
     * @see https://api.slack.com/docs/formatting for an explanation of formatting.
     *
     * @return ChatPostMessagePayload
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string Actual message to send.
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $message
     *
     * @deprecated Will be removed soon, use `setText()` instead
     *
     * @return ChatPostMessagePayload
     */
    public function setMessage($message)
    {
        $this->setText($message);

        return $this;
    }

    /**
     * @return string
     *
     * @deprecated Will be removed soon, use `getText()` instead
     */
    public function getMessage()
    {
        return $this->getText();
    }

    /**
     * @param string $username Name of bot that will send the message (can be any name you want).
     *
     * @return ChatPostMessagePayload
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string Name of the bot that will send the message.
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param bool $asUser Pass message as authorized user
     *
     * @return ChatPostMessagePayload
     */
    public function setAsUser($asUser)
    {
        $this->asUser = $asUser;

        return $this;
    }

    /**
     * @return bool Returns true if message will be sent as authorized user
     */
    public function getAsUser()
    {
        return $this->asUser;
    }

    /**
     * @param string $parse Change how messages are treated.
     *
     * @see https://api.slack.com/docs/formatting
     *
     * @return ChatPostMessagePayload
     */
    public function setParse($parse)
    {
        $this->parse = $parse;

        return $this;
    }

    /**
     * @return string Change how messages are treated.
     */
    public function getParse()
    {
        return $this->parse;
    }

    /**
     * Sets the emoji to use as the icon for this message (overrides icon URL).
     *
     * You can use one of Slack's emoji's or upload your own.
     *
     * @see https://{YOURSLACKTEAMHERE}.slack.com/customize/emoji
     *
     * @param string|null $iconEmoji Emoji to use as the icon for this message (overrides icon URL).
     *
     * @return ChatPostMessagePayload
     */
    public function setIconEmoji($iconEmoji)
    {
        if (substr($iconEmoji, 0, 1) !== ':') {
            $iconEmoji = sprintf(':%s:', $iconEmoji);
        }

        $this->iconEmoji = $iconEmoji;

        return $this;
    }

    /**
     * @return string|null Emoji to use as the icon for this message.
     */
    public function getIconEmoji()
    {
        return $this->iconEmoji;
    }

    /**
     * @param string|null $iconUrl URL to an image to use as the icon for this message.
     *
     * @return ChatPostMessagePayload
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;

        return $this;
    }

    /**
     * @return string|null URL to an image to use as the icon for this message.
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * By default links to media are unfurled, but links to text content are not.
     * For more information on the differences and how to control this, see the the unfurling documentation.
     *
     * @see https://api.slack.com/docs/unfurling
     *
     * @param bool $unfurlLinks Pass true to enable unfurling of primarily text-based content.
     *
     * @return ChatPostMessagePayload
     */
    public function setUnfurlLinks($unfurlLinks)
    {
        $this->unfurlLinks = $unfurlLinks;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUnfurlLinks()
    {
        return $this->unfurlLinks;
    }

    /**
     * @see https://api.slack.com/docs/unfurling
     *
     * @param bool $unfurlMedia Pass false to disable unfurling of media content.
     *
     * @return ChatPostMessagePayload
     */
    public function setUnfurlMedia($unfurlMedia)
    {
        $this->unfurlMedia = $unfurlMedia;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUnfurlMedia()
    {
        return $this->unfurlMedia;
    }

    /**
     * @param bool $linkNames Set to true to automatically find and link channel names and usernames in the message.
     *
     * @return ChatPostMessagePayload
     */
    public function setLinkNames($linkNames)
    {
        $this->linkNames = $linkNames;

        return $this;
    }

    /**
     * @see https://api.slack.com/docs/unfurling
     *
     * @return bool|null Whether channel names and usernames in the message should be linked automatically.
     */
    public function getLinkNames()
    {
        return $this->linkNames;
    }

    /**
     * @return Attachment[]|ArrayCollection
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param Attachment $attachment
     *
     * @return ChatPostMessagePayload
     */
    public function addAttachment(Attachment $attachment)
    {
        $this->attachments->add($attachment);

        return $this;
    }

    /**
     * Use for serialization.
     *
     * @return string
     */
    public function getAttachmentsJson()
    {
        return $this->attachmentsJson;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'chat.postMessage';
    }

    /**
     * @inheritdoc
     */
    public function beforeSerialize(Serializer $serializer)
    {
        $this->attachmentsJson = $serializer->serialize($this->attachments, 'json');
    }
}
