<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateNodePoolRequests update a node pool's image and/or version.
 *
 * Generated from protobuf message <code>google.container.v1.UpdateNodePoolRequest</code>
 */
class UpdateNodePoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $project_id = '';
    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $zone = '';
    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $cluster_id = '';
    /**
     * Deprecated. The name of the node pool to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $node_pool_id = '';
    /**
     * Required. The Kubernetes version to change the nodes to (typically an
     * upgrade).
     * Users may specify either explicit versions offered by Kubernetes Engine or
     * version aliases, which have the following behavior:
     * - "latest": picks the highest valid Kubernetes version
     * - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     * - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     * - "1.X.Y-gke.N": picks an explicit Kubernetes version
     * - "-": picks the Kubernetes master version
     *
     * Generated from protobuf field <code>string node_version = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $node_version = '';
    /**
     * Required. The desired image type for the node pool.
     *
     * Generated from protobuf field <code>string image_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $image_type = '';
    /**
     * The name (project, location, cluster, node pool) of the node pool to
     * update. Specified in the format
     * `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 8;</code>
     */
    private $name = '';
    /**
     * The desired list of Google Compute Engine
     * [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     * node pool's nodes should be located. Changing the locations for a node pool
     * will result in nodes being either created or removed from the node pool,
     * depending on whether locations are being added or removed.
     *
     * Generated from protobuf field <code>repeated string locations = 13;</code>
     */
    private $locations;
    /**
     * The desired workload metadata config for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.WorkloadMetadataConfig workload_metadata_config = 14;</code>
     */
    private $workload_metadata_config = null;
    /**
     * Upgrade settings control disruption and speed of the upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 15;</code>
     */
    private $upgrade_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Deprecated. The Google Developers Console [project ID or project
     *           number](https://support.google.com/cloud/answer/6158840).
     *           This field has been deprecated and replaced by the name field.
     *     @type string $zone
     *           Deprecated. The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     *           cluster resides. This field has been deprecated and replaced by the name
     *           field.
     *     @type string $cluster_id
     *           Deprecated. The name of the cluster to upgrade.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $node_pool_id
     *           Deprecated. The name of the node pool to upgrade.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $node_version
     *           Required. The Kubernetes version to change the nodes to (typically an
     *           upgrade).
     *           Users may specify either explicit versions offered by Kubernetes Engine or
     *           version aliases, which have the following behavior:
     *           - "latest": picks the highest valid Kubernetes version
     *           - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     *           - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     *           - "1.X.Y-gke.N": picks an explicit Kubernetes version
     *           - "-": picks the Kubernetes master version
     *     @type string $image_type
     *           Required. The desired image type for the node pool.
     *     @type string $name
     *           The name (project, location, cluster, node pool) of the node pool to
     *           update. Specified in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $locations
     *           The desired list of Google Compute Engine
     *           [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     *           node pool's nodes should be located. Changing the locations for a node pool
     *           will result in nodes being either created or removed from the node pool,
     *           depending on whether locations are being added or removed.
     *     @type \Google\Cloud\Container\V1\WorkloadMetadataConfig $workload_metadata_config
     *           The desired workload metadata config for the node pool.
     *     @type \Google\Cloud\Container\V1\NodePool\UpgradeSettings $upgrade_settings
     *           Upgrade settings control disruption and speed of the upgrade.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getProjectId()
    {
        @trigger_error('project_id is deprecated.', E_USER_DEPRECATED);
        return $this->project_id;
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setProjectId($var)
    {
        @trigger_error('project_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getZone()
    {
        @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        return $this->zone;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setZone($var)
    {
        @trigger_error('zone is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getClusterId()
    {
        @trigger_error('cluster_id is deprecated.', E_USER_DEPRECATED);
        return $this->cluster_id;
    }

    /**
     * Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setClusterId($var)
    {
        @trigger_error('cluster_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the node pool to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getNodePoolId()
    {
        @trigger_error('node_pool_id is deprecated.', E_USER_DEPRECATED);
        return $this->node_pool_id;
    }

    /**
     * Deprecated. The name of the node pool to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setNodePoolId($var)
    {
        @trigger_error('node_pool_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->node_pool_id = $var;

        return $this;
    }

    /**
     * Required. The Kubernetes version to change the nodes to (typically an
     * upgrade).
     * Users may specify either explicit versions offered by Kubernetes Engine or
     * version aliases, which have the following behavior:
     * - "latest": picks the highest valid Kubernetes version
     * - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     * - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     * - "1.X.Y-gke.N": picks an explicit Kubernetes version
     * - "-": picks the Kubernetes master version
     *
     * Generated from protobuf field <code>string node_version = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNodeVersion()
    {
        return $this->node_version;
    }

    /**
     * Required. The Kubernetes version to change the nodes to (typically an
     * upgrade).
     * Users may specify either explicit versions offered by Kubernetes Engine or
     * version aliases, which have the following behavior:
     * - "latest": picks the highest valid Kubernetes version
     * - "1.X": picks the highest valid patch+gke.N patch in the 1.X version
     * - "1.X.Y": picks the highest valid gke.N patch in the 1.X.Y version
     * - "1.X.Y-gke.N": picks an explicit Kubernetes version
     * - "-": picks the Kubernetes master version
     *
     * Generated from protobuf field <code>string node_version = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNodeVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_version = $var;

        return $this;
    }

    /**
     * Required. The desired image type for the node pool.
     *
     * Generated from protobuf field <code>string image_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getImageType()
    {
        return $this->image_type;
    }

    /**
     * Required. The desired image type for the node pool.
     *
     * Generated from protobuf field <code>string image_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setImageType($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_type = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster, node pool) of the node pool to
     * update. Specified in the format
     * `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 8;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster, node pool) of the node pool to
     * update. Specified in the format
     * `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 8;</code>
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
     * The desired list of Google Compute Engine
     * [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     * node pool's nodes should be located. Changing the locations for a node pool
     * will result in nodes being either created or removed from the node pool,
     * depending on whether locations are being added or removed.
     *
     * Generated from protobuf field <code>repeated string locations = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * The desired list of Google Compute Engine
     * [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     * node pool's nodes should be located. Changing the locations for a node pool
     * will result in nodes being either created or removed from the node pool,
     * depending on whether locations are being added or removed.
     *
     * Generated from protobuf field <code>repeated string locations = 13;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->locations = $arr;

        return $this;
    }

    /**
     * The desired workload metadata config for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.WorkloadMetadataConfig workload_metadata_config = 14;</code>
     * @return \Google\Cloud\Container\V1\WorkloadMetadataConfig|null
     */
    public function getWorkloadMetadataConfig()
    {
        return isset($this->workload_metadata_config) ? $this->workload_metadata_config : null;
    }

    public function hasWorkloadMetadataConfig()
    {
        return isset($this->workload_metadata_config);
    }

    public function clearWorkloadMetadataConfig()
    {
        unset($this->workload_metadata_config);
    }

    /**
     * The desired workload metadata config for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.WorkloadMetadataConfig workload_metadata_config = 14;</code>
     * @param \Google\Cloud\Container\V1\WorkloadMetadataConfig $var
     * @return $this
     */
    public function setWorkloadMetadataConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\WorkloadMetadataConfig::class);
        $this->workload_metadata_config = $var;

        return $this;
    }

    /**
     * Upgrade settings control disruption and speed of the upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 15;</code>
     * @return \Google\Cloud\Container\V1\NodePool\UpgradeSettings|null
     */
    public function getUpgradeSettings()
    {
        return isset($this->upgrade_settings) ? $this->upgrade_settings : null;
    }

    public function hasUpgradeSettings()
    {
        return isset($this->upgrade_settings);
    }

    public function clearUpgradeSettings()
    {
        unset($this->upgrade_settings);
    }

    /**
     * Upgrade settings control disruption and speed of the upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 15;</code>
     * @param \Google\Cloud\Container\V1\NodePool\UpgradeSettings $var
     * @return $this
     */
    public function setUpgradeSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodePool\UpgradeSettings::class);
        $this->upgrade_settings = $var;

        return $this;
    }

}

