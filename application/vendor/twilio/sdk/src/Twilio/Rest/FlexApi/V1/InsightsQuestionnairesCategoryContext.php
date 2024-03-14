<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\FlexApi\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class InsightsQuestionnairesCategoryContext extends InstanceContext {
    /**
     * Initialize the InsightsQuestionnairesCategoryContext
     *
     * @param Version $version Version that contains the resource
     * @param string $categoryId Category ID to update
     */
    public function __construct(Version $version, $categoryId) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['categoryId' => $categoryId, ];

        $this->uri = '/Insights/QM/Categories/' . \rawurlencode($categoryId) . '';
    }

    /**
     * Update the InsightsQuestionnairesCategoryInstance
     *
     * @param string $name The category name.
     * @param array|Options $options Optional Arguments
     * @return InsightsQuestionnairesCategoryInstance Updated
     *                                                InsightsQuestionnairesCategoryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $name, array $options = []): InsightsQuestionnairesCategoryInstance {
        $options = new Values($options);

        $data = Values::of(['Name' => $name, ]);
        $headers = Values::of(['Token' => $options['token'], ]);

        $payload = $this->version->update('POST', $this->uri, [], $data, $headers);

        return new InsightsQuestionnairesCategoryInstance(
            $this->version,
            $payload,
            $this->solution['categoryId']
        );
    }

    /**
     * Delete the InsightsQuestionnairesCategoryInstance
     *
     * @param array|Options $options Optional Arguments
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(array $options = []): bool {
        $options = new Values($options);

        $headers = Values::of(['Token' => $options['token'], ]);

        return $this->version->delete('DELETE', $this->uri, [], [], $headers);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.FlexApi.V1.InsightsQuestionnairesCategoryContext ' . \implode(' ', $context) . ']';
    }
}