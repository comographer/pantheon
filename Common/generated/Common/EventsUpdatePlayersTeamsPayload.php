<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/mimir.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.EventsUpdatePlayersTeamsPayload</code>
 */
class EventsUpdatePlayersTeamsPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 event_id = 1;</code>
     */
    protected $event_id = 0;
    /**
     * Generated from protobuf field <code>repeated .common.TeamMapping ids_to_team_names = 2;</code>
     */
    private $ids_to_team_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $event_id
     *     @type array<\Common\TeamMapping>|\Google\Protobuf\Internal\RepeatedField $ids_to_team_names
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Mimir::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 event_id = 1;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>int32 event_id = 1;</code>
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
     * Generated from protobuf field <code>repeated .common.TeamMapping ids_to_team_names = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdsToTeamNames()
    {
        return $this->ids_to_team_names;
    }

    /**
     * Generated from protobuf field <code>repeated .common.TeamMapping ids_to_team_names = 2;</code>
     * @param array<\Common\TeamMapping>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdsToTeamNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Common\TeamMapping::class);
        $this->ids_to_team_names = $arr;

        return $this;
    }

}
