<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use UnexpectedValueException;

/**
 * Protobuf type <code>Common.EventType</code>
 */
class EventType
{
    /**
     * Generated from protobuf enum <code>ONLINE = 0;</code>
     */
    const ONLINE = 0;
    /**
     * Generated from protobuf enum <code>TOURNAMENT = 1;</code>
     */
    const TOURNAMENT = 1;
    /**
     * Generated from protobuf enum <code>LOCAL = 2;</code>
     */
    const LOCAL = 2;

    private static $valueToName = [
        self::ONLINE => 'ONLINE',
        self::TOURNAMENT => 'TOURNAMENT',
        self::LOCAL => 'LOCAL',
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
