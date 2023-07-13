<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.PlayerSeating</code>
 */
class PlayerSeating extends \Google\Protobuf\Internal\Message
{
    /**
     * order at the table
     *
     * Generated from protobuf field <code>int32 order = 1;</code>
     */
    protected $order = 0;
    /**
     * Generated from protobuf field <code>int32 player_id = 2;</code>
     */
    protected $player_id = 0;
    /**
     * Generated from protobuf field <code>int32 session_id = 3;</code>
     */
    protected $session_id = 0;
    /**
     * Generated from protobuf field <code>int32 table_index = 4;</code>
     */
    protected $table_index = 0;
    /**
     * Generated from protobuf field <code>float rating = 5;</code>
     */
    protected $rating = 0.0;
    /**
     * Generated from protobuf field <code>string player_title = 6;</code>
     */
    protected $player_title = '';
    /**
     * Generated from protobuf field <code>bool has_avatar = 7;</code>
     */
    protected $has_avatar = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $order
     *           order at the table
     *     @type int $player_id
     *     @type int $session_id
     *     @type int $table_index
     *     @type float $rating
     *     @type string $player_title
     *     @type bool $has_avatar
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * order at the table
     *
     * Generated from protobuf field <code>int32 order = 1;</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * order at the table
     *
     * Generated from protobuf field <code>int32 order = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->order = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 player_id = 2;</code>
     * @return int
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * Generated from protobuf field <code>int32 player_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->player_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 session_id = 3;</code>
     * @return int
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Generated from protobuf field <code>int32 session_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkInt32($var);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 table_index = 4;</code>
     * @return int
     */
    public function getTableIndex()
    {
        return $this->table_index;
    }

    /**
     * Generated from protobuf field <code>int32 table_index = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTableIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->table_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float rating = 5;</code>
     * @return float
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Generated from protobuf field <code>float rating = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setRating($var)
    {
        GPBUtil::checkFloat($var);
        $this->rating = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string player_title = 6;</code>
     * @return string
     */
    public function getPlayerTitle()
    {
        return $this->player_title;
    }

    /**
     * Generated from protobuf field <code>string player_title = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayerTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_avatar = 7;</code>
     * @return bool
     */
    public function getHasAvatar()
    {
        return $this->has_avatar;
    }

    /**
     * Generated from protobuf field <code>bool has_avatar = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasAvatar($var)
    {
        GPBUtil::checkBool($var);
        $this->has_avatar = $var;

        return $this;
    }

}

