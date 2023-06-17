<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1beta1/authorization_policy.proto

namespace Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of rules.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule</code>
 */
class Rule extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. List of attributes for the traffic source. All of the sources must match.
     * A source is a match if both principals and ip_blocks match. If not set,
     * the action specified in the 'action' field will be applied without any
     * rule checks for the source.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule.Source sources = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $sources;
    /**
     * Optional. List of attributes for the traffic destination. All of the destinations
     * must match. A destination is a match if a request matches all the
     * specified hosts, ports, methods and headers. If not set, the
     * action specified in the 'action' field will be applied without any rule
     * checks for the destination.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule.Destination destinations = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $destinations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule\Source[]|\Google\Protobuf\Internal\RepeatedField $sources
     *           Optional. List of attributes for the traffic source. All of the sources must match.
     *           A source is a match if both principals and ip_blocks match. If not set,
     *           the action specified in the 'action' field will be applied without any
     *           rule checks for the source.
     *     @type \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule\Destination[]|\Google\Protobuf\Internal\RepeatedField $destinations
     *           Optional. List of attributes for the traffic destination. All of the destinations
     *           must match. A destination is a match if a request matches all the
     *           specified hosts, ports, methods and headers. If not set, the
     *           action specified in the 'action' field will be applied without any rule
     *           checks for the destination.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1Beta1\AuthorizationPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. List of attributes for the traffic source. All of the sources must match.
     * A source is a match if both principals and ip_blocks match. If not set,
     * the action specified in the 'action' field will be applied without any
     * rule checks for the source.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule.Source sources = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * Optional. List of attributes for the traffic source. All of the sources must match.
     * A source is a match if both principals and ip_blocks match. If not set,
     * the action specified in the 'action' field will be applied without any
     * rule checks for the source.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule.Source sources = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule\Source[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule\Source::class);
        $this->sources = $arr;

        return $this;
    }

    /**
     * Optional. List of attributes for the traffic destination. All of the destinations
     * must match. A destination is a match if a request matches all the
     * specified hosts, ports, methods and headers. If not set, the
     * action specified in the 'action' field will be applied without any rule
     * checks for the destination.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule.Destination destinations = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Optional. List of attributes for the traffic destination. All of the destinations
     * must match. A destination is a match if a request matches all the
     * specified hosts, ports, methods and headers. If not set, the
     * action specified in the 'action' field will be applied without any rule
     * checks for the destination.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule.Destination destinations = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule\Destination[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule\Destination::class);
        $this->destinations = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Rule::class, \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy_Rule::class);

