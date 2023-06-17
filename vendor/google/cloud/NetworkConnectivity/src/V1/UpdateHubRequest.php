<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [HubService.UpdateHub][google.cloud.networkconnectivity.v1.HubService.UpdateHub] method.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.UpdateHubRequest</code>
 */
class UpdateHubRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. In the case of an update to an existing hub, field mask is used to specify
     * the fields to be overwritten. The fields specified in the update_mask are
     * relative to the resource, not the full request. A field is overwritten if
     * it is in the mask. If the user does not provide a mask, then all fields are
     * overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $update_mask = null;
    /**
     * Required. The state that the hub should be in after the update.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.Hub hub = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $hub = null;
    /**
     * Optional. A unique request ID (optional). If you specify this ID, you can use it
     * in cases when you need to retry your request. When you need to retry, this
     * ID lets the server know that it can ignore the request if it has already
     * been completed. The server guarantees that for at least 60 minutes after
     * the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check to see whether the original operation
     * was received. If it was, the server ignores the second request. This
     * behavior prevents clients from mistakenly creating duplicate commitments.
     * The request ID must be a valid UUID, with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. In the case of an update to an existing hub, field mask is used to specify
     *           the fields to be overwritten. The fields specified in the update_mask are
     *           relative to the resource, not the full request. A field is overwritten if
     *           it is in the mask. If the user does not provide a mask, then all fields are
     *           overwritten.
     *     @type \Google\Cloud\NetworkConnectivity\V1\Hub $hub
     *           Required. The state that the hub should be in after the update.
     *     @type string $request_id
     *           Optional. A unique request ID (optional). If you specify this ID, you can use it
     *           in cases when you need to retry your request. When you need to retry, this
     *           ID lets the server know that it can ignore the request if it has already
     *           been completed. The server guarantees that for at least 60 minutes after
     *           the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check to see whether the original operation
     *           was received. If it was, the server ignores the second request. This
     *           behavior prevents clients from mistakenly creating duplicate commitments.
     *           The request ID must be a valid UUID, with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. In the case of an update to an existing hub, field mask is used to specify
     * the fields to be overwritten. The fields specified in the update_mask are
     * relative to the resource, not the full request. A field is overwritten if
     * it is in the mask. If the user does not provide a mask, then all fields are
     * overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. In the case of an update to an existing hub, field mask is used to specify
     * the fields to be overwritten. The fields specified in the update_mask are
     * relative to the resource, not the full request. A field is overwritten if
     * it is in the mask. If the user does not provide a mask, then all fields are
     * overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The state that the hub should be in after the update.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.Hub hub = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\Hub|null
     */
    public function getHub()
    {
        return isset($this->hub) ? $this->hub : null;
    }

    public function hasHub()
    {
        return isset($this->hub);
    }

    public function clearHub()
    {
        unset($this->hub);
    }

    /**
     * Required. The state that the hub should be in after the update.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.Hub hub = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\Hub $var
     * @return $this
     */
    public function setHub($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\Hub::class);
        $this->hub = $var;

        return $this;
    }

    /**
     * Optional. A unique request ID (optional). If you specify this ID, you can use it
     * in cases when you need to retry your request. When you need to retry, this
     * ID lets the server know that it can ignore the request if it has already
     * been completed. The server guarantees that for at least 60 minutes after
     * the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check to see whether the original operation
     * was received. If it was, the server ignores the second request. This
     * behavior prevents clients from mistakenly creating duplicate commitments.
     * The request ID must be a valid UUID, with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique request ID (optional). If you specify this ID, you can use it
     * in cases when you need to retry your request. When you need to retry, this
     * ID lets the server know that it can ignore the request if it has already
     * been completed. The server guarantees that for at least 60 minutes after
     * the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check to see whether the original operation
     * was received. If it was, the server ignores the second request. This
     * behavior prevents clients from mistakenly creating duplicate commitments.
     * The request ID must be a valid UUID, with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

