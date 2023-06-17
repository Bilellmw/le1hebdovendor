<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A piece of metadata that applies to a window of a call.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.CallAnnotation</code>
 */
class CallAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * The channel of the audio where the annotation occurs. For single-channel
     * audio, this field is not populated.
     *
     * Generated from protobuf field <code>int32 channel_tag = 1;</code>
     */
    private $channel_tag = 0;
    /**
     * The boundary in the conversation where the annotation starts, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary annotation_start_boundary = 4;</code>
     */
    private $annotation_start_boundary = null;
    /**
     * The boundary in the conversation where the annotation ends, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary annotation_end_boundary = 5;</code>
     */
    private $annotation_end_boundary = null;
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\InterruptionData $interruption_data
     *           Data specifying an interruption.
     *     @type \Google\Cloud\ContactCenterInsights\V1\SentimentData $sentiment_data
     *           Data specifying sentiment.
     *     @type \Google\Cloud\ContactCenterInsights\V1\SilenceData $silence_data
     *           Data specifying silence.
     *     @type \Google\Cloud\ContactCenterInsights\V1\HoldData $hold_data
     *           Data specifying a hold.
     *     @type \Google\Cloud\ContactCenterInsights\V1\EntityMentionData $entity_mention_data
     *           Data specifying an entity mention.
     *     @type \Google\Cloud\ContactCenterInsights\V1\IntentMatchData $intent_match_data
     *           Data specifying an intent match.
     *     @type \Google\Cloud\ContactCenterInsights\V1\PhraseMatchData $phrase_match_data
     *           Data specifying a phrase match.
     *     @type int $channel_tag
     *           The channel of the audio where the annotation occurs. For single-channel
     *           audio, this field is not populated.
     *     @type \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary $annotation_start_boundary
     *           The boundary in the conversation where the annotation starts, inclusive.
     *     @type \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary $annotation_end_boundary
     *           The boundary in the conversation where the annotation ends, inclusive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Data specifying an interruption.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.InterruptionData interruption_data = 10;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\InterruptionData|null
     */
    public function getInterruptionData()
    {
        return $this->readOneof(10);
    }

    public function hasInterruptionData()
    {
        return $this->hasOneof(10);
    }

    /**
     * Data specifying an interruption.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.InterruptionData interruption_data = 10;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\InterruptionData $var
     * @return $this
     */
    public function setInterruptionData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\InterruptionData::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Data specifying sentiment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SentimentData sentiment_data = 11;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\SentimentData|null
     */
    public function getSentimentData()
    {
        return $this->readOneof(11);
    }

    public function hasSentimentData()
    {
        return $this->hasOneof(11);
    }

    /**
     * Data specifying sentiment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SentimentData sentiment_data = 11;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\SentimentData $var
     * @return $this
     */
    public function setSentimentData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\SentimentData::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Data specifying silence.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SilenceData silence_data = 12;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\SilenceData|null
     */
    public function getSilenceData()
    {
        return $this->readOneof(12);
    }

    public function hasSilenceData()
    {
        return $this->hasOneof(12);
    }

    /**
     * Data specifying silence.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SilenceData silence_data = 12;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\SilenceData $var
     * @return $this
     */
    public function setSilenceData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\SilenceData::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Data specifying a hold.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.HoldData hold_data = 13;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\HoldData|null
     */
    public function getHoldData()
    {
        return $this->readOneof(13);
    }

    public function hasHoldData()
    {
        return $this->hasOneof(13);
    }

    /**
     * Data specifying a hold.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.HoldData hold_data = 13;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\HoldData $var
     * @return $this
     */
    public function setHoldData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\HoldData::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Data specifying an entity mention.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.EntityMentionData entity_mention_data = 15;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\EntityMentionData|null
     */
    public function getEntityMentionData()
    {
        return $this->readOneof(15);
    }

    public function hasEntityMentionData()
    {
        return $this->hasOneof(15);
    }

    /**
     * Data specifying an entity mention.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.EntityMentionData entity_mention_data = 15;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\EntityMentionData $var
     * @return $this
     */
    public function setEntityMentionData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\EntityMentionData::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Data specifying an intent match.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IntentMatchData intent_match_data = 16;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\IntentMatchData|null
     */
    public function getIntentMatchData()
    {
        return $this->readOneof(16);
    }

    public function hasIntentMatchData()
    {
        return $this->hasOneof(16);
    }

    /**
     * Data specifying an intent match.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IntentMatchData intent_match_data = 16;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\IntentMatchData $var
     * @return $this
     */
    public function setIntentMatchData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\IntentMatchData::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Data specifying a phrase match.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatchData phrase_match_data = 17;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\PhraseMatchData|null
     */
    public function getPhraseMatchData()
    {
        return $this->readOneof(17);
    }

    public function hasPhraseMatchData()
    {
        return $this->hasOneof(17);
    }

    /**
     * Data specifying a phrase match.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatchData phrase_match_data = 17;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\PhraseMatchData $var
     * @return $this
     */
    public function setPhraseMatchData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\PhraseMatchData::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * The channel of the audio where the annotation occurs. For single-channel
     * audio, this field is not populated.
     *
     * Generated from protobuf field <code>int32 channel_tag = 1;</code>
     * @return int
     */
    public function getChannelTag()
    {
        return $this->channel_tag;
    }

    /**
     * The channel of the audio where the annotation occurs. For single-channel
     * audio, this field is not populated.
     *
     * Generated from protobuf field <code>int32 channel_tag = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelTag($var)
    {
        GPBUtil::checkInt32($var);
        $this->channel_tag = $var;

        return $this;
    }

    /**
     * The boundary in the conversation where the annotation starts, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary annotation_start_boundary = 4;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary|null
     */
    public function getAnnotationStartBoundary()
    {
        return isset($this->annotation_start_boundary) ? $this->annotation_start_boundary : null;
    }

    public function hasAnnotationStartBoundary()
    {
        return isset($this->annotation_start_boundary);
    }

    public function clearAnnotationStartBoundary()
    {
        unset($this->annotation_start_boundary);
    }

    /**
     * The boundary in the conversation where the annotation starts, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary annotation_start_boundary = 4;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary $var
     * @return $this
     */
    public function setAnnotationStartBoundary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary::class);
        $this->annotation_start_boundary = $var;

        return $this;
    }

    /**
     * The boundary in the conversation where the annotation ends, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary annotation_end_boundary = 5;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary|null
     */
    public function getAnnotationEndBoundary()
    {
        return isset($this->annotation_end_boundary) ? $this->annotation_end_boundary : null;
    }

    public function hasAnnotationEndBoundary()
    {
        return isset($this->annotation_end_boundary);
    }

    public function clearAnnotationEndBoundary()
    {
        unset($this->annotation_end_boundary);
    }

    /**
     * The boundary in the conversation where the annotation ends, inclusive.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.AnnotationBoundary annotation_end_boundary = 5;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary $var
     * @return $this
     */
    public function setAnnotationEndBoundary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\AnnotationBoundary::class);
        $this->annotation_end_boundary = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}

