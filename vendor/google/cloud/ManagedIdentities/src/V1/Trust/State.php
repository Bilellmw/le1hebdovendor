<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1/resource.proto

namespace Google\Cloud\ManagedIdentities\V1\Trust;

use UnexpectedValueException;

/**
 * Represents the different states of a domain trust.
 *
 * Protobuf type <code>google.cloud.managedidentities.v1.Trust.State</code>
 */
class State
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The domain trust is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The domain trust is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 2;</code>
     */
    const UPDATING = 2;
    /**
     * The domain trust is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 3;</code>
     */
    const DELETING = 3;
    /**
     * The domain trust is connected.
     *
     * Generated from protobuf enum <code>CONNECTED = 4;</code>
     */
    const CONNECTED = 4;
    /**
     * The domain trust is disconnected.
     *
     * Generated from protobuf enum <code>DISCONNECTED = 5;</code>
     */
    const DISCONNECTED = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::UPDATING => 'UPDATING',
        self::DELETING => 'DELETING',
        self::CONNECTED => 'CONNECTED',
        self::DISCONNECTED => 'DISCONNECTED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\ManagedIdentities\V1\Trust_State::class);

