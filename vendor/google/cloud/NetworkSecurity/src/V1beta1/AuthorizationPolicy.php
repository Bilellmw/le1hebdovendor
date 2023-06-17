<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1beta1/authorization_policy.proto

namespace Google\Cloud\NetworkSecurity\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AuthorizationPolicy is a resource that specifies how a server
 * should authorize incoming connections. This resource in itself does
 * not change the configuration unless it's attached to a target https
 * proxy or endpoint config selector resource.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1beta1.AuthorizationPolicy</code>
 */
class AuthorizationPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the AuthorizationPolicy resource. It matches pattern
     * `projects/{project}/locations/{location}/authorizationPolicies/<authorization_policy>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Optional. Free-text description of the resource.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Output only. The timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The timestamp when the resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Set of label tags associated with the AuthorizationPolicy resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Required. The action to take when a rule match is found. Possible values
     * are "ALLOW" or "DENY".
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Action action = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $action = 0;
    /**
     * Optional. List of rules to match. Note that at least one of the rules must match in
     * order for the action specified in the 'action' field to be taken. A rule is
     * a match if there is a matching source and destination. If left blank, the
     * action specified in the `action` field will be applied on every request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule rules = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $rules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the AuthorizationPolicy resource. It matches pattern
     *           `projects/{project}/locations/{location}/authorizationPolicies/<authorization_policy>`.
     *     @type string $description
     *           Optional. Free-text description of the resource.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when the resource was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp when the resource was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Set of label tags associated with the AuthorizationPolicy resource.
     *     @type int $action
     *           Required. The action to take when a rule match is found. Possible values
     *           are "ALLOW" or "DENY".
     *     @type \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule[]|\Google\Protobuf\Internal\RepeatedField $rules
     *           Optional. List of rules to match. Note that at least one of the rules must match in
     *           order for the action specified in the 'action' field to be taken. A rule is
     *           a match if there is a matching source and destination. If left blank, the
     *           action specified in the `action` field will be applied on every request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1Beta1\AuthorizationPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the AuthorizationPolicy resource. It matches pattern
     * `projects/{project}/locations/{location}/authorizationPolicies/<authorization_policy>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the AuthorizationPolicy resource. It matches pattern
     * `projects/{project}/locations/{location}/authorizationPolicies/<authorization_policy>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Free-text description of the resource.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Free-text description of the resource.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp when the resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Set of label tags associated with the AuthorizationPolicy resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Set of label tags associated with the AuthorizationPolicy resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Required. The action to take when a rule match is found. Possible values
     * are "ALLOW" or "DENY".
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Action action = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Required. The action to take when a rule match is found. Possible values
     * are "ALLOW" or "DENY".
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Action action = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Optional. List of rules to match. Note that at least one of the rules must match in
     * order for the action specified in the 'action' field to be taken. A rule is
     * a match if there is a matching source and destination. If left blank, the
     * action specified in the `action` field will be applied on every request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule rules = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Optional. List of rules to match. Note that at least one of the rules must match in
     * order for the action specified in the 'action' field to be taken. A rule is
     * a match if there is a matching source and destination. If left blank, the
     * action specified in the `action` field will be applied on every request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule rules = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule::class);
        $this->rules = $arr;

        return $this;
    }

}

