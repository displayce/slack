<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Tests\Payload;

use CL\Slack\Payload\ChannelsInfoPayloadResponse;
use CL\Slack\Payload\PayloadResponseInterface;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class ChannelsInfoPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * @inheritdoc
     */
    protected function getResponseData()
    {
        return array_merge([], $this->getChannelResponseData());
    }

    /**
     * {@inheritdoc}
     *
     * @param array                       $responseData
     * @param ChannelsInfoPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertResponseWithChannel($responseData, $payloadResponse);
    }
}
