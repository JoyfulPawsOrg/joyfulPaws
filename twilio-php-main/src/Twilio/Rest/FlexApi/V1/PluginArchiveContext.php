<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\FlexApi\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class PluginArchiveContext extends InstanceContext
    {
    /**
     * Initialize the PluginArchiveContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID of the Flex Plugin resource to archive.
     */
    public function __construct(
        Version $version,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'sid' =>
            $sid,
        ];

        $this->uri = '/PluginService/Plugins/' . \rawurlencode($sid)
        .'/Archive';
    }

    /**
     * Update the PluginArchiveInstance
     *
     * @param array|Options $options Optional Arguments
     * @return PluginArchiveInstance Updated PluginArchiveInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): PluginArchiveInstance
    {

        $options = new Values($options);

        $headers = Values::of(['Flex-Metadata' => $options['flexMetadata']]);

        $payload = $this->version->update('POST', $this->uri, [], [], $headers);

        return new PluginArchiveInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.FlexApi.V1.PluginArchiveContext ' . \implode(' ', $context) . ']';
    }
}