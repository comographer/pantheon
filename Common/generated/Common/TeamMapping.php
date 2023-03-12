<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.TeamMapping</code>
 */
class TeamMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 playerId = 1;</code>
     */
    protected $playerId = 0;
    /**
     * Generated from protobuf field <code>string teamName = 2;</code>
     */
    protected $teamName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $playerId
     *     @type string $teamName
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 playerId = 1;</code>
     * @return int
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Generated from protobuf field <code>int32 playerId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->playerId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string teamName = 2;</code>
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Generated from protobuf field <code>string teamName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTeamName($var)
    {
        GPBUtil::checkString($var, True);
        $this->teamName = $var;

        return $this;
    }

}
