<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.RulesetConfig</code>
 */
class RulesetConfig extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * Generated from protobuf field <code>.Common.ComplexUma complexUma = 1;</code>
     */
    protected $complexUma = null;
    /**
     *
     * Generated from protobuf field <code>.Common.EndingPolicy endingPolicy = 2;</code>
     */
    protected $endingPolicy = 0;
    /**
     *
     * Generated from protobuf field <code>.Common.Uma uma = 3;</code>
     */
    protected $uma = null;
    /**
     *
     * Generated from protobuf field <code>.Common.UmaType umaType = 4;</code>
     */
    protected $umaType = 0;
    /**
     *
     * Generated from protobuf field <code>bool doubleronHonbaAtamahane = 5;</code>
     */
    protected $doubleronHonbaAtamahane = false;
    /**
     *
     * Generated from protobuf field <code>bool doubleronRiichiAtamahane = 6;</code>
     */
    protected $doubleronRiichiAtamahane = false;
    /**
     *
     * Generated from protobuf field <code>bool equalizeUma = 7;</code>
     */
    protected $equalizeUma = false;
    /**
     *
     * Generated from protobuf field <code>bool extraChomboPayments = 8;</code>
     */
    protected $extraChomboPayments = false;
    /**
     *
     * Generated from protobuf field <code>bool playAdditionalRounds = 9;</code>
     */
    protected $playAdditionalRounds = false;
    /**
     *
     * Generated from protobuf field <code>bool riichiGoesToWinner = 10;</code>
     */
    protected $riichiGoesToWinner = false;
    /**
     *
     * Generated from protobuf field <code>bool tonpuusen = 11;</code>
     */
    protected $tonpuusen = false;
    /**
     *
     * Generated from protobuf field <code>bool withAbortives = 12;</code>
     */
    protected $withAbortives = false;
    /**
     *
     * Generated from protobuf field <code>bool withAtamahane = 13;</code>
     */
    protected $withAtamahane = false;
    /**
     *
     * Generated from protobuf field <code>bool withButtobi = 14;</code>
     */
    protected $withButtobi = false;
    /**
     *
     * Generated from protobuf field <code>bool withKazoe = 15;</code>
     */
    protected $withKazoe = false;
    /**
     *
     * Generated from protobuf field <code>bool withKiriageMangan = 16;</code>
     */
    protected $withKiriageMangan = false;
    /**
     *
     * Generated from protobuf field <code>bool withKuitan = 17;</code>
     */
    protected $withKuitan = false;
    /**
     *
     * Generated from protobuf field <code>bool withLeadingDealerGameOver = 18;</code>
     */
    protected $withLeadingDealerGameOver = false;
    /**
     *
     * Generated from protobuf field <code>bool withMultiYakumans = 19;</code>
     */
    protected $withMultiYakumans = false;
    /**
     *
     * Generated from protobuf field <code>bool withNagashiMangan = 20;</code>
     */
    protected $withNagashiMangan = false;
    /**
     *
     * Generated from protobuf field <code>bool withWinningDealerHonbaSkipped = 21;</code>
     */
    protected $withWinningDealerHonbaSkipped = false;
    /**
     *
     * Generated from protobuf field <code>int32 chipsValue = 22;</code>
     */
    protected $chipsValue = 0;
    /**
     *
     * Generated from protobuf field <code>int32 chomboPenalty = 23;</code>
     */
    protected $chomboPenalty = 0;
    /**
     *
     * Generated from protobuf field <code>int32 gameExpirationTime = 24;</code>
     */
    protected $gameExpirationTime = 0;
    /**
     *
     * Generated from protobuf field <code>int32 goalPoints = 25;</code>
     */
    protected $goalPoints = 0;
    /**
     *
     * Generated from protobuf field <code>int32 maxPenalty = 26;</code>
     */
    protected $maxPenalty = 0;
    /**
     *
     * Generated from protobuf field <code>int32 minPenalty = 27;</code>
     */
    protected $minPenalty = 0;
    /**
     *
     * Generated from protobuf field <code>int32 oka = 28;</code>
     */
    protected $oka = 0;
    /**
     *
     * Generated from protobuf field <code>int32 penaltyStep = 29;</code>
     */
    protected $penaltyStep = 0;
    /**
     * Generated from protobuf field <code>int32 replacementPlayerFixedPoints = 30;</code>
     */
    protected $replacementPlayerFixedPoints = 0;
    /**
     * Generated from protobuf field <code>int32 replacementPlayerOverrideUma = 31;</code>
     */
    protected $replacementPlayerOverrideUma = 0;
    /**
     *
     * Generated from protobuf field <code>int32 startPoints = 32;</code>
     */
    protected $startPoints = 0;
    /**
     *
     * Generated from protobuf field <code>int32 startRating = 33;</code>
     */
    protected $startRating = 0;
    /**
     *
     * Generated from protobuf field <code>repeated int32 allowedYaku = 34;</code>
     */
    private $allowedYaku;
    /**
     *
     * Generated from protobuf field <code>repeated int32 yakuWithPao = 35;</code>
     */
    private $yakuWithPao;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Common\ComplexUma $complexUma
     *     @type int $endingPolicy
     *     @type \Common\Uma $uma
     *     @type int $umaType
     *     @type bool $doubleronHonbaAtamahane
     *     @type bool $doubleronRiichiAtamahane
     *     @type bool $equalizeUma
     *     @type bool $extraChomboPayments
     *     @type bool $playAdditionalRounds
     *     @type bool $riichiGoesToWinner
     *     @type bool $tonpuusen
     *     @type bool $withAbortives
     *     @type bool $withAtamahane
     *     @type bool $withButtobi
     *     @type bool $withKazoe
     *     @type bool $withKiriageMangan
     *     @type bool $withKuitan
     *     @type bool $withLeadingDealerGameOver
     *     @type bool $withMultiYakumans
     *     @type bool $withNagashiMangan
     *     @type bool $withWinningDealerHonbaSkipped
     *     @type int $chipsValue
     *     @type int $chomboPenalty
     *     @type int $gameExpirationTime
     *     @type int $goalPoints
     *     @type int $maxPenalty
     *     @type int $minPenalty
     *     @type int $oka
     *     @type int $penaltyStep
     *     @type int $replacementPlayerFixedPoints
     *     @type int $replacementPlayerOverrideUma
     *     @type int $startPoints
     *     @type int $startRating
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allowedYaku
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $yakuWithPao
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     *
     * Generated from protobuf field <code>.Common.ComplexUma complexUma = 1;</code>
     * @return \Common\ComplexUma|null
     */
    public function getComplexUma()
    {
        return $this->complexUma;
    }

    public function hasComplexUma()
    {
        return isset($this->complexUma);
    }

    public function clearComplexUma()
    {
        unset($this->complexUma);
    }

    /**
     *
     * Generated from protobuf field <code>.Common.ComplexUma complexUma = 1;</code>
     * @param \Common\ComplexUma $var
     * @return $this
     */
    public function setComplexUma($var)
    {
        GPBUtil::checkMessage($var, \Common\ComplexUma::class);
        $this->complexUma = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>.Common.EndingPolicy endingPolicy = 2;</code>
     * @return int
     */
    public function getEndingPolicy()
    {
        return $this->endingPolicy;
    }

    /**
     *
     * Generated from protobuf field <code>.Common.EndingPolicy endingPolicy = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEndingPolicy($var)
    {
        GPBUtil::checkEnum($var, \Common\EndingPolicy::class);
        $this->endingPolicy = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>.Common.Uma uma = 3;</code>
     * @return \Common\Uma|null
     */
    public function getUma()
    {
        return $this->uma;
    }

    public function hasUma()
    {
        return isset($this->uma);
    }

    public function clearUma()
    {
        unset($this->uma);
    }

    /**
     *
     * Generated from protobuf field <code>.Common.Uma uma = 3;</code>
     * @param \Common\Uma $var
     * @return $this
     */
    public function setUma($var)
    {
        GPBUtil::checkMessage($var, \Common\Uma::class);
        $this->uma = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>.Common.UmaType umaType = 4;</code>
     * @return int
     */
    public function getUmaType()
    {
        return $this->umaType;
    }

    /**
     *
     * Generated from protobuf field <code>.Common.UmaType umaType = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUmaType($var)
    {
        GPBUtil::checkEnum($var, \Common\UmaType::class);
        $this->umaType = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool doubleronHonbaAtamahane = 5;</code>
     * @return bool
     */
    public function getDoubleronHonbaAtamahane()
    {
        return $this->doubleronHonbaAtamahane;
    }

    /**
     *
     * Generated from protobuf field <code>bool doubleronHonbaAtamahane = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setDoubleronHonbaAtamahane($var)
    {
        GPBUtil::checkBool($var);
        $this->doubleronHonbaAtamahane = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool doubleronRiichiAtamahane = 6;</code>
     * @return bool
     */
    public function getDoubleronRiichiAtamahane()
    {
        return $this->doubleronRiichiAtamahane;
    }

    /**
     *
     * Generated from protobuf field <code>bool doubleronRiichiAtamahane = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setDoubleronRiichiAtamahane($var)
    {
        GPBUtil::checkBool($var);
        $this->doubleronRiichiAtamahane = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool equalizeUma = 7;</code>
     * @return bool
     */
    public function getEqualizeUma()
    {
        return $this->equalizeUma;
    }

    /**
     *
     * Generated from protobuf field <code>bool equalizeUma = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setEqualizeUma($var)
    {
        GPBUtil::checkBool($var);
        $this->equalizeUma = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool extraChomboPayments = 8;</code>
     * @return bool
     */
    public function getExtraChomboPayments()
    {
        return $this->extraChomboPayments;
    }

    /**
     *
     * Generated from protobuf field <code>bool extraChomboPayments = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setExtraChomboPayments($var)
    {
        GPBUtil::checkBool($var);
        $this->extraChomboPayments = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool playAdditionalRounds = 9;</code>
     * @return bool
     */
    public function getPlayAdditionalRounds()
    {
        return $this->playAdditionalRounds;
    }

    /**
     *
     * Generated from protobuf field <code>bool playAdditionalRounds = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setPlayAdditionalRounds($var)
    {
        GPBUtil::checkBool($var);
        $this->playAdditionalRounds = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool riichiGoesToWinner = 10;</code>
     * @return bool
     */
    public function getRiichiGoesToWinner()
    {
        return $this->riichiGoesToWinner;
    }

    /**
     *
     * Generated from protobuf field <code>bool riichiGoesToWinner = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setRiichiGoesToWinner($var)
    {
        GPBUtil::checkBool($var);
        $this->riichiGoesToWinner = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool tonpuusen = 11;</code>
     * @return bool
     */
    public function getTonpuusen()
    {
        return $this->tonpuusen;
    }

    /**
     *
     * Generated from protobuf field <code>bool tonpuusen = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setTonpuusen($var)
    {
        GPBUtil::checkBool($var);
        $this->tonpuusen = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withAbortives = 12;</code>
     * @return bool
     */
    public function getWithAbortives()
    {
        return $this->withAbortives;
    }

    /**
     *
     * Generated from protobuf field <code>bool withAbortives = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithAbortives($var)
    {
        GPBUtil::checkBool($var);
        $this->withAbortives = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withAtamahane = 13;</code>
     * @return bool
     */
    public function getWithAtamahane()
    {
        return $this->withAtamahane;
    }

    /**
     *
     * Generated from protobuf field <code>bool withAtamahane = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithAtamahane($var)
    {
        GPBUtil::checkBool($var);
        $this->withAtamahane = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withButtobi = 14;</code>
     * @return bool
     */
    public function getWithButtobi()
    {
        return $this->withButtobi;
    }

    /**
     *
     * Generated from protobuf field <code>bool withButtobi = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithButtobi($var)
    {
        GPBUtil::checkBool($var);
        $this->withButtobi = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withKazoe = 15;</code>
     * @return bool
     */
    public function getWithKazoe()
    {
        return $this->withKazoe;
    }

    /**
     *
     * Generated from protobuf field <code>bool withKazoe = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithKazoe($var)
    {
        GPBUtil::checkBool($var);
        $this->withKazoe = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withKiriageMangan = 16;</code>
     * @return bool
     */
    public function getWithKiriageMangan()
    {
        return $this->withKiriageMangan;
    }

    /**
     *
     * Generated from protobuf field <code>bool withKiriageMangan = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithKiriageMangan($var)
    {
        GPBUtil::checkBool($var);
        $this->withKiriageMangan = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withKuitan = 17;</code>
     * @return bool
     */
    public function getWithKuitan()
    {
        return $this->withKuitan;
    }

    /**
     *
     * Generated from protobuf field <code>bool withKuitan = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithKuitan($var)
    {
        GPBUtil::checkBool($var);
        $this->withKuitan = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withLeadingDealerGameOver = 18;</code>
     * @return bool
     */
    public function getWithLeadingDealerGameOver()
    {
        return $this->withLeadingDealerGameOver;
    }

    /**
     *
     * Generated from protobuf field <code>bool withLeadingDealerGameOver = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithLeadingDealerGameOver($var)
    {
        GPBUtil::checkBool($var);
        $this->withLeadingDealerGameOver = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withMultiYakumans = 19;</code>
     * @return bool
     */
    public function getWithMultiYakumans()
    {
        return $this->withMultiYakumans;
    }

    /**
     *
     * Generated from protobuf field <code>bool withMultiYakumans = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithMultiYakumans($var)
    {
        GPBUtil::checkBool($var);
        $this->withMultiYakumans = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withNagashiMangan = 20;</code>
     * @return bool
     */
    public function getWithNagashiMangan()
    {
        return $this->withNagashiMangan;
    }

    /**
     *
     * Generated from protobuf field <code>bool withNagashiMangan = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithNagashiMangan($var)
    {
        GPBUtil::checkBool($var);
        $this->withNagashiMangan = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>bool withWinningDealerHonbaSkipped = 21;</code>
     * @return bool
     */
    public function getWithWinningDealerHonbaSkipped()
    {
        return $this->withWinningDealerHonbaSkipped;
    }

    /**
     *
     * Generated from protobuf field <code>bool withWinningDealerHonbaSkipped = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithWinningDealerHonbaSkipped($var)
    {
        GPBUtil::checkBool($var);
        $this->withWinningDealerHonbaSkipped = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 chipsValue = 22;</code>
     * @return int
     */
    public function getChipsValue()
    {
        return $this->chipsValue;
    }

    /**
     *
     * Generated from protobuf field <code>int32 chipsValue = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setChipsValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->chipsValue = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 chomboPenalty = 23;</code>
     * @return int
     */
    public function getChomboPenalty()
    {
        return $this->chomboPenalty;
    }

    /**
     *
     * Generated from protobuf field <code>int32 chomboPenalty = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setChomboPenalty($var)
    {
        GPBUtil::checkInt32($var);
        $this->chomboPenalty = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 gameExpirationTime = 24;</code>
     * @return int
     */
    public function getGameExpirationTime()
    {
        return $this->gameExpirationTime;
    }

    /**
     *
     * Generated from protobuf field <code>int32 gameExpirationTime = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setGameExpirationTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->gameExpirationTime = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 goalPoints = 25;</code>
     * @return int
     */
    public function getGoalPoints()
    {
        return $this->goalPoints;
    }

    /**
     *
     * Generated from protobuf field <code>int32 goalPoints = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setGoalPoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->goalPoints = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 maxPenalty = 26;</code>
     * @return int
     */
    public function getMaxPenalty()
    {
        return $this->maxPenalty;
    }

    /**
     *
     * Generated from protobuf field <code>int32 maxPenalty = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxPenalty($var)
    {
        GPBUtil::checkInt32($var);
        $this->maxPenalty = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 minPenalty = 27;</code>
     * @return int
     */
    public function getMinPenalty()
    {
        return $this->minPenalty;
    }

    /**
     *
     * Generated from protobuf field <code>int32 minPenalty = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setMinPenalty($var)
    {
        GPBUtil::checkInt32($var);
        $this->minPenalty = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 oka = 28;</code>
     * @return int
     */
    public function getOka()
    {
        return $this->oka;
    }

    /**
     *
     * Generated from protobuf field <code>int32 oka = 28;</code>
     * @param int $var
     * @return $this
     */
    public function setOka($var)
    {
        GPBUtil::checkInt32($var);
        $this->oka = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 penaltyStep = 29;</code>
     * @return int
     */
    public function getPenaltyStep()
    {
        return $this->penaltyStep;
    }

    /**
     *
     * Generated from protobuf field <code>int32 penaltyStep = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setPenaltyStep($var)
    {
        GPBUtil::checkInt32($var);
        $this->penaltyStep = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 replacementPlayerFixedPoints = 30;</code>
     * @return int
     */
    public function getReplacementPlayerFixedPoints()
    {
        return $this->replacementPlayerFixedPoints;
    }

    /**
     * Generated from protobuf field <code>int32 replacementPlayerFixedPoints = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setReplacementPlayerFixedPoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->replacementPlayerFixedPoints = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 replacementPlayerOverrideUma = 31;</code>
     * @return int
     */
    public function getReplacementPlayerOverrideUma()
    {
        return $this->replacementPlayerOverrideUma;
    }

    /**
     * Generated from protobuf field <code>int32 replacementPlayerOverrideUma = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setReplacementPlayerOverrideUma($var)
    {
        GPBUtil::checkInt32($var);
        $this->replacementPlayerOverrideUma = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 startPoints = 32;</code>
     * @return int
     */
    public function getStartPoints()
    {
        return $this->startPoints;
    }

    /**
     *
     * Generated from protobuf field <code>int32 startPoints = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setStartPoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->startPoints = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>int32 startRating = 33;</code>
     * @return int
     */
    public function getStartRating()
    {
        return $this->startRating;
    }

    /**
     *
     * Generated from protobuf field <code>int32 startRating = 33;</code>
     * @param int $var
     * @return $this
     */
    public function setStartRating($var)
    {
        GPBUtil::checkInt32($var);
        $this->startRating = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>repeated int32 allowedYaku = 34;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedYaku()
    {
        return $this->allowedYaku;
    }

    /**
     *
     * Generated from protobuf field <code>repeated int32 allowedYaku = 34;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedYaku($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->allowedYaku = $arr;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>repeated int32 yakuWithPao = 35;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYakuWithPao()
    {
        return $this->yakuWithPao;
    }

    /**
     *
     * Generated from protobuf field <code>repeated int32 yakuWithPao = 35;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYakuWithPao($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->yakuWithPao = $arr;

        return $this;
    }

}

