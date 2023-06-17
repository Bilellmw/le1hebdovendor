<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of sentiment analysis. Sentiment analysis inspects user input
 * and identifies the prevailing subjective opinion, especially to determine a
 * user's attitude as positive, negative, or neutral.
 * For [Participants.DetectIntent][], it needs to be configured in
 * [DetectIntentRequest.query_params][google.cloud.dialogflow.v2.DetectIntentRequest.query_params]. For
 * [Participants.StreamingDetectIntent][], it needs to be configured in
 * [StreamingDetectIntentRequest.query_params][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.query_params].
 * And for [Participants.AnalyzeContent][google.cloud.dialogflow.v2.Participants.AnalyzeContent] and
 * [Participants.StreamingAnalyzeContent][google.cloud.dialogflow.v2.Participants.StreamingAnalyzeContent], it needs to be configured in
 * [ConversationProfile.human_agent_assistant_config][google.cloud.dialogflow.v2.ConversationProfile.human_agent_assistant_config]
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SentimentAnalysisResult</code>
 */
class SentimentAnalysisResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The sentiment analysis result for `query_text`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Sentiment query_text_sentiment = 1;</code>
     */
    private $query_text_sentiment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\Sentiment $query_text_sentiment
     *           The sentiment analysis result for `query_text`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * The sentiment analysis result for `query_text`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Sentiment query_text_sentiment = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2\Sentiment|null
     */
    public function getQueryTextSentiment()
    {
        return isset($this->query_text_sentiment) ? $this->query_text_sentiment : null;
    }

    public function hasQueryTextSentiment()
    {
        return isset($this->query_text_sentiment);
    }

    public function clearQueryTextSentiment()
    {
        unset($this->query_text_sentiment);
    }

    /**
     * The sentiment analysis result for `query_text`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Sentiment query_text_sentiment = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\Sentiment $var
     * @return $this
     */
    public function setQueryTextSentiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Sentiment::class);
        $this->query_text_sentiment = $var;

        return $this;
    }

}

