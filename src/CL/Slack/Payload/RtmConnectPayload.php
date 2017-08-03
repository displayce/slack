<?php

namespace CL\Slack\Payload;

/**
 * Payload that triggers the rtm.connect-method.
 *
 * @author Alexis MARQUIS <alexis@marquis.me>
 *
 * @see    Official documentation at https://api.slack.com/methods/rtm.connect
 */
class RtmConnectPayload extends AbstractPayload
{
    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'rtm.connect';
    }
}
