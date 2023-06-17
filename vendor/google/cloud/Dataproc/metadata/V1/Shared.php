<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class Shared
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

%google/cloud/dataproc/v1/shared.protogoogle.cloud.dataproc.v1"�
RuntimeConfigP

properties (27.google.cloud.dataproc.v1.RuntimeConfig.PropertiesEntryB�A1
PropertiesEntry
key (	
value (	:8"�
EnvironmentConfigH
execution_config (2).google.cloud.dataproc.v1.ExecutionConfigB�AL
peripherals_config (2+.google.cloud.dataproc.v1.PeripheralsConfigB�A"�
ExecutionConfig
service_account (	B�A
network_uri (	B�AH 
subnetwork_uri (	B�AH 
network_tags (	B�A
kms_key (	B�AB	
network"9
SparkHistoryServerConfig
dataproc_cluster (	B�A"�
PeripheralsConfig
metastore_service (	B�A\\
spark_history_server_config (22.google.cloud.dataproc.v1.SparkHistoryServerConfigB�A"�
RuntimeInfoL
	endpoints (24.google.cloud.dataproc.v1.RuntimeInfo.EndpointsEntryB�A

output_uri (	B�A0
EndpointsEntry
key (	
value (	:8*�
	Component
COMPONENT_UNSPECIFIED 
ANACONDA

DOCKER	
DRUID		
FLINK	
HBASE
HIVE_WEBHCAT
JUPYTER

PRESTO

RANGER
SOLR

ZEPPELIN
	ZOOKEEPER*J
FailureAction
FAILURE_ACTION_UNSPECIFIED 
	NO_ACTION

DELETEBo
com.google.cloud.dataproc.v1BSharedProtoPZ@google.golang.org/genproto/googleapis/cloud/dataproc/v1;dataprocbproto3'
        , true);

        static::$is_initialized = true;
    }
}

