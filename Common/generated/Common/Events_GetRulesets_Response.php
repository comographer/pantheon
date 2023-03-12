<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mimir.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Events_GetRulesets_Response</code>
 */
class Events_GetRulesets_Response extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Common.RulesetGenerated rulesets = 1;</code>
     */
    private $rulesets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Common\RulesetGenerated>|\Google\Protobuf\Internal\RepeatedField $rulesets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mimir::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Common.RulesetGenerated rulesets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRulesets()
    {
        return $this->rulesets;
    }

    /**
     * Generated from protobuf field <code>repeated .Common.RulesetGenerated rulesets = 1;</code>
     * @param array<\Common\RulesetGenerated>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRulesets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Common\RulesetGenerated::class);
        $this->rulesets = $arr;

        return $this;
    }

}
