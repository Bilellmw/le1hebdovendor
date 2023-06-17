<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/operations.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of a LabelVideoObjectTracking operation metadata.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.LabelVideoObjectTrackingOperationMetadata</code>
 */
class LabelVideoObjectTrackingOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Basic human annotation config used in labeling request.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     */
    private $basic_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $basic_config
     *           Basic human annotation config used in labeling request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Basic human annotation config used in labeling request.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig|null
     */
    public function getBasicConfig()
    {
        return isset($this->basic_config) ? $this->basic_config : null;
    }

    public function hasBasicConfig()
    {
        return isset($this->basic_config);
    }

    public function clearBasicConfig()
    {
        unset($this->basic_config);
    }

    /**
     * Basic human annotation config used in labeling request.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $var
     * @return $this
     */
    public function setBasicConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig::class);
        $this->basic_config = $var;

        return $this;
    }

}

