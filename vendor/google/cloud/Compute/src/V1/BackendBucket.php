<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Cloud Storage Bucket resource.
 * This Cloud Storage bucket resource is referenced by a URL map of a load balancer. For more information, read Backend Buckets.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.BackendBucket</code>
 */
class BackendBucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Storage bucket name.
     *
     * Generated from protobuf field <code>string bucket_name = 283610048;</code>
     */
    private $bucket_name = null;
    /**
     * Cloud CDN configuration for this BackendBucket.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.BackendBucketCdnPolicy cdn_policy = 213976452;</code>
     */
    private $cdn_policy = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * Headers that the HTTP/S load balancer should add to proxied responses.
     *
     * Generated from protobuf field <code>repeated string custom_response_headers = 387539094;</code>
     */
    private $custom_response_headers;
    /**
     * An optional textual description of the resource; provided by the client when the resource is created.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    private $description = null;
    /**
     * If true, enable Cloud CDN for this BackendBucket.
     *
     * Generated from protobuf field <code>bool enable_cdn = 282942321;</code>
     */
    private $enable_cdn = null;
    /**
     * [Output Only] Unique identifier for the resource; defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * Type of the resource.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    private $self_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket_name
     *           Cloud Storage bucket name.
     *     @type \Google\Cloud\Compute\V1\BackendBucketCdnPolicy $cdn_policy
     *           Cloud CDN configuration for this BackendBucket.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $custom_response_headers
     *           Headers that the HTTP/S load balancer should add to proxied responses.
     *     @type string $description
     *           An optional textual description of the resource; provided by the client when the resource is created.
     *     @type bool $enable_cdn
     *           If true, enable Cloud CDN for this BackendBucket.
     *     @type int|string $id
     *           [Output Only] Unique identifier for the resource; defined by the server.
     *     @type string $kind
     *           Type of the resource.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Storage bucket name.
     *
     * Generated from protobuf field <code>string bucket_name = 283610048;</code>
     * @return string
     */
    public function getBucketName()
    {
        return isset($this->bucket_name) ? $this->bucket_name : '';
    }

    public function hasBucketName()
    {
        return isset($this->bucket_name);
    }

    public function clearBucketName()
    {
        unset($this->bucket_name);
    }

    /**
     * Cloud Storage bucket name.
     *
     * Generated from protobuf field <code>string bucket_name = 283610048;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * Cloud CDN configuration for this BackendBucket.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.BackendBucketCdnPolicy cdn_policy = 213976452;</code>
     * @return \Google\Cloud\Compute\V1\BackendBucketCdnPolicy|null
     */
    public function getCdnPolicy()
    {
        return isset($this->cdn_policy) ? $this->cdn_policy : null;
    }

    public function hasCdnPolicy()
    {
        return isset($this->cdn_policy);
    }

    public function clearCdnPolicy()
    {
        unset($this->cdn_policy);
    }

    /**
     * Cloud CDN configuration for this BackendBucket.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.BackendBucketCdnPolicy cdn_policy = 213976452;</code>
     * @param \Google\Cloud\Compute\V1\BackendBucketCdnPolicy $var
     * @return $this
     */
    public function setCdnPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\BackendBucketCdnPolicy::class);
        $this->cdn_policy = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * Headers that the HTTP/S load balancer should add to proxied responses.
     *
     * Generated from protobuf field <code>repeated string custom_response_headers = 387539094;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomResponseHeaders()
    {
        return $this->custom_response_headers;
    }

    /**
     * Headers that the HTTP/S load balancer should add to proxied responses.
     *
     * Generated from protobuf field <code>repeated string custom_response_headers = 387539094;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomResponseHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->custom_response_headers = $arr;

        return $this;
    }

    /**
     * An optional textual description of the resource; provided by the client when the resource is created.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional textual description of the resource; provided by the client when the resource is created.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
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
     * If true, enable Cloud CDN for this BackendBucket.
     *
     * Generated from protobuf field <code>bool enable_cdn = 282942321;</code>
     * @return bool
     */
    public function getEnableCdn()
    {
        return isset($this->enable_cdn) ? $this->enable_cdn : false;
    }

    public function hasEnableCdn()
    {
        return isset($this->enable_cdn);
    }

    public function clearEnableCdn()
    {
        unset($this->enable_cdn);
    }

    /**
     * If true, enable Cloud CDN for this BackendBucket.
     *
     * Generated from protobuf field <code>bool enable_cdn = 282942321;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableCdn($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_cdn = $var;

        return $this;
    }

    /**
     * [Output Only] Unique identifier for the resource; defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] Unique identifier for the resource; defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Type of the resource.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * Type of the resource.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
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
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

}

