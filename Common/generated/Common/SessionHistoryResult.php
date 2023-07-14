<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.SessionHistoryResult</code>
 */
class SessionHistoryResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string session_hash = 1;</code>
     */
    protected $session_hash = '';
    /**
     * Generated from protobuf field <code>int32 event_id = 2;</code>
     */
    protected $event_id = 0;
    /**
     * Generated from protobuf field <code>int32 player_id = 3;</code>
     */
    protected $player_id = 0;
    /**
     * Generated from protobuf field <code>int32 score = 4;</code>
     */
    protected $score = 0;
    /**
     * Generated from protobuf field <code>float rating_delta = 5;</code>
     */
    protected $rating_delta = 0.0;
    /**
     * Generated from protobuf field <code>int32 place = 6;</code>
     */
    protected $place = 0;
    /**
     * Generated from protobuf field <code>string title = 7;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>bool has_avatar = 8;</code>
     */
    protected $has_avatar = false;
    /**
     * Generated from protobuf field <code>string last_update = 9;</code>
     */
    protected $last_update = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_hash
     *     @type int $event_id
     *     @type int $player_id
     *     @type int $score
     *     @type float $rating_delta
     *     @type int $place
     *     @type string $title
     *     @type bool $has_avatar
     *     @type string $last_update
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string session_hash = 1;</code>
     * @return string
     */
    public function getSessionHash()
    {
        return $this->session_hash;
    }

    /**
     * Generated from protobuf field <code>string session_hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 event_id = 2;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>int32 event_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkInt32($var);
        $this->event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 player_id = 3;</code>
     * @return int
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * Generated from protobuf field <code>int32 player_id = 3;</code>
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
     * Generated from protobuf field <code>int32 score = 4;</code>
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>int32 score = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkInt32($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float rating_delta = 5;</code>
     * @return float
     */
    public function getRatingDelta()
    {
        return $this->rating_delta;
    }

    /**
     * Generated from protobuf field <code>float rating_delta = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setRatingDelta($var)
    {
        GPBUtil::checkFloat($var);
        $this->rating_delta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 place = 6;</code>
     * @return int
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Generated from protobuf field <code>int32 place = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPlace($var)
    {
        GPBUtil::checkInt32($var);
        $this->place = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 7;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_avatar = 8;</code>
     * @return bool
     */
    public function getHasAvatar()
    {
        return $this->has_avatar;
    }

    /**
     * Generated from protobuf field <code>bool has_avatar = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasAvatar($var)
    {
        GPBUtil::checkBool($var);
        $this->has_avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_update = 9;</code>
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * Generated from protobuf field <code>string last_update = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLastUpdate($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_update = $var;

        return $this;
    }

}

