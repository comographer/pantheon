<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.AccessGetSuperadminFlagResponse</code>
 */
class AccessGetSuperadminFlagResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_admin = 1;</code>
     */
    protected $is_admin = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_admin
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Frey::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_admin = 1;</code>
     * @return bool
     */
    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    /**
     * Generated from protobuf field <code>bool is_admin = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAdmin($var)
    {
        GPBUtil::checkBool($var);
        $this->is_admin = $var;

        return $this;
    }

}
