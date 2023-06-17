<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1beta1/domains.proto

namespace Google\Cloud\Domains\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `UpdateRegistration` method.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1beta1.UpdateRegistrationRequest</code>
 */
class UpdateRegistrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Fields of the `Registration` to update.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.Registration registration = 1;</code>
     */
    private $registration = null;
    /**
     * Required. The field mask describing which fields to update as a comma-separated list.
     * For example, if only the labels are being updated, the `update_mask` would
     * be `"labels"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Domains\V1beta1\Registration $registration
     *           Fields of the `Registration` to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The field mask describing which fields to update as a comma-separated list.
     *           For example, if only the labels are being updated, the `update_mask` would
     *           be `"labels"`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Beta1\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Fields of the `Registration` to update.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.Registration registration = 1;</code>
     * @return \Google\Cloud\Domains\V1beta1\Registration|null
     */
    public function getRegistration()
    {
        return isset($this->registration) ? $this->registration : null;
    }

    public function hasRegistration()
    {
        return isset($this->registration);
    }

    public function clearRegistration()
    {
        unset($this->registration);
    }

    /**
     * Fields of the `Registration` to update.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.Registration registration = 1;</code>
     * @param \Google\Cloud\Domains\V1beta1\Registration $var
     * @return $this
     */
    public function setRegistration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Domains\V1beta1\Registration::class);
        $this->registration = $var;

        return $this;
    }

    /**
     * Required. The field mask describing which fields to update as a comma-separated list.
     * For example, if only the labels are being updated, the `update_mask` would
     * be `"labels"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The field mask describing which fields to update as a comma-separated list.
     * For example, if only the labels are being updated, the `update_mask` would
     * be `"labels"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

