<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RestoreInstanceRequest restores an existing instances's file share from a
 * backup.
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.RestoreInstanceRequest</code>
 */
class RestoreInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the instance, in the format
     * `projects/{project_number}/locations/{location_id}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. Name of the file share in the Cloud Filestore instance that the backup
     * is being restored to.
     *
     * Generated from protobuf field <code>string file_share = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $file_share = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the instance, in the format
     *           `projects/{project_number}/locations/{location_id}/instances/{instance_id}`.
     *     @type string $file_share
     *           Required. Name of the file share in the Cloud Filestore instance that the backup
     *           is being restored to.
     *     @type string $source_backup
     *           The resource name of the backup, in the format
     *           `projects/{project_number}/locations/{location_id}/backups/{backup_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the instance, in the format
     * `projects/{project_number}/locations/{location_id}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the instance, in the format
     * `projects/{project_number}/locations/{location_id}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. Name of the file share in the Cloud Filestore instance that the backup
     * is being restored to.
     *
     * Generated from protobuf field <code>string file_share = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFileShare()
    {
        return $this->file_share;
    }

    /**
     * Required. Name of the file share in the Cloud Filestore instance that the backup
     * is being restored to.
     *
     * Generated from protobuf field <code>string file_share = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFileShare($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_share = $var;

        return $this;
    }

    /**
     * The resource name of the backup, in the format
     * `projects/{project_number}/locations/{location_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string source_backup = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSourceBackup()
    {
        return $this->readOneof(3);
    }

    public function hasSourceBackup()
    {
        return $this->hasOneof(3);
    }

    /**
     * The resource name of the backup, in the format
     * `projects/{project_number}/locations/{location_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string source_backup = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSourceBackup($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

