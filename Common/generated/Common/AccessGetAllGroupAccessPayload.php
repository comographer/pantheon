<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.AccessGetAllGroupAccessPayload</code>
 */
class AccessGetAllGroupAccessPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 group_id = 1;</code>
     */
    protected $group_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $group_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Frey::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 group_id = 1;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>int32 group_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkInt32($var);
        $this->group_id = $var;

        return $this;
    }

}
