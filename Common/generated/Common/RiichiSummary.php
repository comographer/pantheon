<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.RiichiSummary</code>
 */
class RiichiSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 riichiWon = 1;</code>
     */
    protected $riichiWon = 0;
    /**
     * Generated from protobuf field <code>int32 riichiLost = 2;</code>
     */
    protected $riichiLost = 0;
    /**
     * Generated from protobuf field <code>int32 feedUnderRiichi = 3;</code>
     */
    protected $feedUnderRiichi = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $riichiWon
     *     @type int $riichiLost
     *     @type int $feedUnderRiichi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 riichiWon = 1;</code>
     * @return int
     */
    public function getRiichiWon()
    {
        return $this->riichiWon;
    }

    /**
     * Generated from protobuf field <code>int32 riichiWon = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRiichiWon($var)
    {
        GPBUtil::checkInt32($var);
        $this->riichiWon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 riichiLost = 2;</code>
     * @return int
     */
    public function getRiichiLost()
    {
        return $this->riichiLost;
    }

    /**
     * Generated from protobuf field <code>int32 riichiLost = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRiichiLost($var)
    {
        GPBUtil::checkInt32($var);
        $this->riichiLost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 feedUnderRiichi = 3;</code>
     * @return int
     */
    public function getFeedUnderRiichi()
    {
        return $this->feedUnderRiichi;
    }

    /**
     * Generated from protobuf field <code>int32 feedUnderRiichi = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFeedUnderRiichi($var)
    {
        GPBUtil::checkInt32($var);
        $this->feedUnderRiichi = $var;

        return $this;
    }

}
