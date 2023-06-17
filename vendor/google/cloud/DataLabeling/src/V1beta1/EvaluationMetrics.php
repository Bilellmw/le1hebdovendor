<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.EvaluationMetrics</code>
 */
class EvaluationMetrics extends \Google\Protobuf\Internal\Message
{
    protected $metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\ClassificationMetrics $classification_metrics
     *     @type \Google\Cloud\DataLabeling\V1beta1\ObjectDetectionMetrics $object_detection_metrics
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Evaluation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ClassificationMetrics classification_metrics = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\ClassificationMetrics|null
     */
    public function getClassificationMetrics()
    {
        return $this->readOneof(1);
    }

    public function hasClassificationMetrics()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ClassificationMetrics classification_metrics = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\ClassificationMetrics $var
     * @return $this
     */
    public function setClassificationMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\ClassificationMetrics::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ObjectDetectionMetrics object_detection_metrics = 2;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\ObjectDetectionMetrics|null
     */
    public function getObjectDetectionMetrics()
    {
        return $this->readOneof(2);
    }

    public function hasObjectDetectionMetrics()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ObjectDetectionMetrics object_detection_metrics = 2;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\ObjectDetectionMetrics $var
     * @return $this
     */
    public function setObjectDetectionMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\ObjectDetectionMetrics::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMetrics()
    {
        return $this->whichOneof("metrics");
    }

}

