<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/tenant_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for updating a specified tenant.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.UpdateTenantRequest</code>
 */
class UpdateTenantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The tenant resource to replace the current resource in the system.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Tenant tenant = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $tenant = null;
    /**
     * Strongly recommended for the best service experience.
     * If [update_mask][google.cloud.talent.v4beta1.UpdateTenantRequest.update_mask] is provided, only the specified fields in
     * [tenant][google.cloud.talent.v4beta1.UpdateTenantRequest.tenant] are updated. Otherwise all the fields are updated.
     * A field mask to specify the tenant fields to be updated. Only
     * top level fields of [Tenant][google.cloud.talent.v4beta1.Tenant] are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Talent\V4beta1\Tenant $tenant
     *           Required. The tenant resource to replace the current resource in the system.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Strongly recommended for the best service experience.
     *           If [update_mask][google.cloud.talent.v4beta1.UpdateTenantRequest.update_mask] is provided, only the specified fields in
     *           [tenant][google.cloud.talent.v4beta1.UpdateTenantRequest.tenant] are updated. Otherwise all the fields are updated.
     *           A field mask to specify the tenant fields to be updated. Only
     *           top level fields of [Tenant][google.cloud.talent.v4beta1.Tenant] are supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\TenantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The tenant resource to replace the current resource in the system.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Tenant tenant = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Talent\V4beta1\Tenant|null
     */
    public function getTenant()
    {
        return isset($this->tenant) ? $this->tenant : null;
    }

    public function hasTenant()
    {
        return isset($this->tenant);
    }

    public function clearTenant()
    {
        unset($this->tenant);
    }

    /**
     * Required. The tenant resource to replace the current resource in the system.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Tenant tenant = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Talent\V4beta1\Tenant $var
     * @return $this
     */
    public function setTenant($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Tenant::class);
        $this->tenant = $var;

        return $this;
    }

    /**
     * Strongly recommended for the best service experience.
     * If [update_mask][google.cloud.talent.v4beta1.UpdateTenantRequest.update_mask] is provided, only the specified fields in
     * [tenant][google.cloud.talent.v4beta1.UpdateTenantRequest.tenant] are updated. Otherwise all the fields are updated.
     * A field mask to specify the tenant fields to be updated. Only
     * top level fields of [Tenant][google.cloud.talent.v4beta1.Tenant] are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * Strongly recommended for the best service experience.
     * If [update_mask][google.cloud.talent.v4beta1.UpdateTenantRequest.update_mask] is provided, only the specified fields in
     * [tenant][google.cloud.talent.v4beta1.UpdateTenantRequest.tenant] are updated. Otherwise all the fields are updated.
     * A field mask to specify the tenant fields to be updated. Only
     * top level fields of [Tenant][google.cloud.talent.v4beta1.Tenant] are supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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

