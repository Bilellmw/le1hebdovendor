<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A job executed by the workflow.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.OrderedJob</code>
 */
class OrderedJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The step id. The id must be unique among all jobs
     * within the template.
     * The step id is used as prefix for job id, as job
     * `goog-dataproc-workflow-step-id` label, and in
     * [prerequisiteStepIds][google.cloud.dataproc.v1.OrderedJob.prerequisite_step_ids] field from other
     * steps.
     * The id must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). Cannot begin or end with underscore
     * or hyphen. Must consist of between 3 and 50 characters.
     *
     * Generated from protobuf field <code>string step_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $step_id = '';
    /**
     * Optional. The labels to associate with this job.
     * Label keys must be between 1 and 63 characters long, and must conform to
     * the following regular expression:
     * [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     * Label values must be between 1 and 63 characters long, and must conform to
     * the following regular expression: [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     * No more than 32 labels can be associated with a given job.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Job scheduling configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobScheduling scheduling = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $scheduling = null;
    /**
     * Optional. The optional list of prerequisite job step_ids.
     * If not specified, the job will start at the beginning of workflow.
     *
     * Generated from protobuf field <code>repeated string prerequisite_step_ids = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $prerequisite_step_ids;
    protected $job_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $step_id
     *           Required. The step id. The id must be unique among all jobs
     *           within the template.
     *           The step id is used as prefix for job id, as job
     *           `goog-dataproc-workflow-step-id` label, and in
     *           [prerequisiteStepIds][google.cloud.dataproc.v1.OrderedJob.prerequisite_step_ids] field from other
     *           steps.
     *           The id must contain only letters (a-z, A-Z), numbers (0-9),
     *           underscores (_), and hyphens (-). Cannot begin or end with underscore
     *           or hyphen. Must consist of between 3 and 50 characters.
     *     @type \Google\Cloud\Dataproc\V1\HadoopJob $hadoop_job
     *           Optional. Job is a Hadoop job.
     *     @type \Google\Cloud\Dataproc\V1\SparkJob $spark_job
     *           Optional. Job is a Spark job.
     *     @type \Google\Cloud\Dataproc\V1\PySparkJob $pyspark_job
     *           Optional. Job is a PySpark job.
     *     @type \Google\Cloud\Dataproc\V1\HiveJob $hive_job
     *           Optional. Job is a Hive job.
     *     @type \Google\Cloud\Dataproc\V1\PigJob $pig_job
     *           Optional. Job is a Pig job.
     *     @type \Google\Cloud\Dataproc\V1\SparkRJob $spark_r_job
     *           Optional. Job is a SparkR job.
     *     @type \Google\Cloud\Dataproc\V1\SparkSqlJob $spark_sql_job
     *           Optional. Job is a SparkSql job.
     *     @type \Google\Cloud\Dataproc\V1\PrestoJob $presto_job
     *           Optional. Job is a Presto job.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels to associate with this job.
     *           Label keys must be between 1 and 63 characters long, and must conform to
     *           the following regular expression:
     *           [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     *           Label values must be between 1 and 63 characters long, and must conform to
     *           the following regular expression: [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     *           No more than 32 labels can be associated with a given job.
     *     @type \Google\Cloud\Dataproc\V1\JobScheduling $scheduling
     *           Optional. Job scheduling configuration.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $prerequisite_step_ids
     *           Optional. The optional list of prerequisite job step_ids.
     *           If not specified, the job will start at the beginning of workflow.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The step id. The id must be unique among all jobs
     * within the template.
     * The step id is used as prefix for job id, as job
     * `goog-dataproc-workflow-step-id` label, and in
     * [prerequisiteStepIds][google.cloud.dataproc.v1.OrderedJob.prerequisite_step_ids] field from other
     * steps.
     * The id must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). Cannot begin or end with underscore
     * or hyphen. Must consist of between 3 and 50 characters.
     *
     * Generated from protobuf field <code>string step_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getStepId()
    {
        return $this->step_id;
    }

    /**
     * Required. The step id. The id must be unique among all jobs
     * within the template.
     * The step id is used as prefix for job id, as job
     * `goog-dataproc-workflow-step-id` label, and in
     * [prerequisiteStepIds][google.cloud.dataproc.v1.OrderedJob.prerequisite_step_ids] field from other
     * steps.
     * The id must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). Cannot begin or end with underscore
     * or hyphen. Must consist of between 3 and 50 characters.
     *
     * Generated from protobuf field <code>string step_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setStepId($var)
    {
        GPBUtil::checkString($var, True);
        $this->step_id = $var;

        return $this;
    }

    /**
     * Optional. Job is a Hadoop job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.HadoopJob hadoop_job = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\HadoopJob|null
     */
    public function getHadoopJob()
    {
        return $this->readOneof(2);
    }

    public function hasHadoopJob()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. Job is a Hadoop job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.HadoopJob hadoop_job = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\HadoopJob $var
     * @return $this
     */
    public function setHadoopJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\HadoopJob::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. Job is a Spark job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkJob spark_job = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkJob|null
     */
    public function getSparkJob()
    {
        return $this->readOneof(3);
    }

    public function hasSparkJob()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional. Job is a Spark job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkJob spark_job = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkJob $var
     * @return $this
     */
    public function setSparkJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkJob::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. Job is a PySpark job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PySparkJob pyspark_job = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\PySparkJob|null
     */
    public function getPysparkJob()
    {
        return $this->readOneof(4);
    }

    public function hasPysparkJob()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Job is a PySpark job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PySparkJob pyspark_job = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\PySparkJob $var
     * @return $this
     */
    public function setPysparkJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\PySparkJob::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. Job is a Hive job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.HiveJob hive_job = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\HiveJob|null
     */
    public function getHiveJob()
    {
        return $this->readOneof(5);
    }

    public function hasHiveJob()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. Job is a Hive job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.HiveJob hive_job = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\HiveJob $var
     * @return $this
     */
    public function setHiveJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\HiveJob::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. Job is a Pig job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PigJob pig_job = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\PigJob|null
     */
    public function getPigJob()
    {
        return $this->readOneof(6);
    }

    public function hasPigJob()
    {
        return $this->hasOneof(6);
    }

    /**
     * Optional. Job is a Pig job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PigJob pig_job = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\PigJob $var
     * @return $this
     */
    public function setPigJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\PigJob::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Optional. Job is a SparkR job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkRJob spark_r_job = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkRJob|null
     */
    public function getSparkRJob()
    {
        return $this->readOneof(11);
    }

    public function hasSparkRJob()
    {
        return $this->hasOneof(11);
    }

    /**
     * Optional. Job is a SparkR job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkRJob spark_r_job = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkRJob $var
     * @return $this
     */
    public function setSparkRJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkRJob::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Optional. Job is a SparkSql job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkSqlJob spark_sql_job = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkSqlJob|null
     */
    public function getSparkSqlJob()
    {
        return $this->readOneof(7);
    }

    public function hasSparkSqlJob()
    {
        return $this->hasOneof(7);
    }

    /**
     * Optional. Job is a SparkSql job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkSqlJob spark_sql_job = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkSqlJob $var
     * @return $this
     */
    public function setSparkSqlJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkSqlJob::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Optional. Job is a Presto job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PrestoJob presto_job = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\PrestoJob|null
     */
    public function getPrestoJob()
    {
        return $this->readOneof(12);
    }

    public function hasPrestoJob()
    {
        return $this->hasOneof(12);
    }

    /**
     * Optional. Job is a Presto job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PrestoJob presto_job = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\PrestoJob $var
     * @return $this
     */
    public function setPrestoJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\PrestoJob::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Optional. The labels to associate with this job.
     * Label keys must be between 1 and 63 characters long, and must conform to
     * the following regular expression:
     * [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     * Label values must be between 1 and 63 characters long, and must conform to
     * the following regular expression: [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     * No more than 32 labels can be associated with a given job.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels to associate with this job.
     * Label keys must be between 1 and 63 characters long, and must conform to
     * the following regular expression:
     * [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     * Label values must be between 1 and 63 characters long, and must conform to
     * the following regular expression: [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     * No more than 32 labels can be associated with a given job.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Job scheduling configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobScheduling scheduling = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\JobScheduling|null
     */
    public function getScheduling()
    {
        return isset($this->scheduling) ? $this->scheduling : null;
    }

    public function hasScheduling()
    {
        return isset($this->scheduling);
    }

    public function clearScheduling()
    {
        unset($this->scheduling);
    }

    /**
     * Optional. Job scheduling configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobScheduling scheduling = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\JobScheduling $var
     * @return $this
     */
    public function setScheduling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\JobScheduling::class);
        $this->scheduling = $var;

        return $this;
    }

    /**
     * Optional. The optional list of prerequisite job step_ids.
     * If not specified, the job will start at the beginning of workflow.
     *
     * Generated from protobuf field <code>repeated string prerequisite_step_ids = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrerequisiteStepIds()
    {
        return $this->prerequisite_step_ids;
    }

    /**
     * Optional. The optional list of prerequisite job step_ids.
     * If not specified, the job will start at the beginning of workflow.
     *
     * Generated from protobuf field <code>repeated string prerequisite_step_ids = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrerequisiteStepIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->prerequisite_step_ids = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobType()
    {
        return $this->whichOneof("job_type");
    }

}

