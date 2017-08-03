<?php

namespace CL\Slack\Payload;

/**
 * @author Alexis MARQUIS <alexis@marquis.me>
 */
class RtmConnectPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var string
     */
    private $url;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
