<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V8\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Forecasted traffic metrics for the planned products and targeting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.services.Forecast</code>
 */
class Forecast extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of unique people reached at least
     * GenerateReachForecastRequest.min_effective_frequency or
     * GenerateReachForecastRequest.effective_frequency_limit times that exactly
     * matches the Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the on_target_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 on_target_reach = 5;</code>
     */
    protected $on_target_reach = null;
    /**
     * Total number of unique people reached at least
     * GenerateReachForecastRequest.min_effective_frequency or
     * GenerateReachForecastRequest.effective_frequency_limit times. This includes
     * people that may fall outside the specified Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the total_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 total_reach = 6;</code>
     */
    protected $total_reach = null;
    /**
     * Number of ad impressions that exactly matches the Targeting.
     *
     * Generated from protobuf field <code>int64 on_target_impressions = 7;</code>
     */
    protected $on_target_impressions = null;
    /**
     * Total number of ad impressions. This includes impressions that may fall
     * outside the specified Targeting, due to insufficient information on
     * signed-in users.
     *
     * Generated from protobuf field <code>int64 total_impressions = 8;</code>
     */
    protected $total_impressions = null;
    /**
     * Number of times the ad's impressions were considered viewable.
     * See https://support.google.com/google-ads/answer/7029393 for
     * more information about what makes an ad viewable and how
     * viewability is measured.
     *
     * Generated from protobuf field <code>int64 viewable_impressions = 9;</code>
     */
    protected $viewable_impressions = null;
    /**
     * A list of effective frequency forecasts. The list is ordered starting with
     * 1+ and ending with the value set in
     * GenerateReachForecastRequest.effective_frequency_limit. If no
     * effective_frequency_limit was set, this list will be empty.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.services.EffectiveFrequencyBreakdown effective_frequency_breakdowns = 10;</code>
     */
    private $effective_frequency_breakdowns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $on_target_reach
     *           Number of unique people reached at least
     *           GenerateReachForecastRequest.min_effective_frequency or
     *           GenerateReachForecastRequest.effective_frequency_limit times that exactly
     *           matches the Targeting.
     *           Note that a minimum number of unique people must be reached in order for
     *           data to be reported. If the minimum number is not met, the on_target_reach
     *           value will be rounded to 0.
     *     @type int|string $total_reach
     *           Total number of unique people reached at least
     *           GenerateReachForecastRequest.min_effective_frequency or
     *           GenerateReachForecastRequest.effective_frequency_limit times. This includes
     *           people that may fall outside the specified Targeting.
     *           Note that a minimum number of unique people must be reached in order for
     *           data to be reported. If the minimum number is not met, the total_reach
     *           value will be rounded to 0.
     *     @type int|string $on_target_impressions
     *           Number of ad impressions that exactly matches the Targeting.
     *     @type int|string $total_impressions
     *           Total number of ad impressions. This includes impressions that may fall
     *           outside the specified Targeting, due to insufficient information on
     *           signed-in users.
     *     @type int|string $viewable_impressions
     *           Number of times the ad's impressions were considered viewable.
     *           See https://support.google.com/google-ads/answer/7029393 for
     *           more information about what makes an ad viewable and how
     *           viewability is measured.
     *     @type \Google\Ads\GoogleAds\V8\Services\EffectiveFrequencyBreakdown[]|\Google\Protobuf\Internal\RepeatedField $effective_frequency_breakdowns
     *           A list of effective frequency forecasts. The list is ordered starting with
     *           1+ and ending with the value set in
     *           GenerateReachForecastRequest.effective_frequency_limit. If no
     *           effective_frequency_limit was set, this list will be empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of unique people reached at least
     * GenerateReachForecastRequest.min_effective_frequency or
     * GenerateReachForecastRequest.effective_frequency_limit times that exactly
     * matches the Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the on_target_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 on_target_reach = 5;</code>
     * @return int|string
     */
    public function getOnTargetReach()
    {
        return isset($this->on_target_reach) ? $this->on_target_reach : 0;
    }

    public function hasOnTargetReach()
    {
        return isset($this->on_target_reach);
    }

    public function clearOnTargetReach()
    {
        unset($this->on_target_reach);
    }

    /**
     * Number of unique people reached at least
     * GenerateReachForecastRequest.min_effective_frequency or
     * GenerateReachForecastRequest.effective_frequency_limit times that exactly
     * matches the Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the on_target_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 on_target_reach = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOnTargetReach($var)
    {
        GPBUtil::checkInt64($var);
        $this->on_target_reach = $var;

        return $this;
    }

    /**
     * Total number of unique people reached at least
     * GenerateReachForecastRequest.min_effective_frequency or
     * GenerateReachForecastRequest.effective_frequency_limit times. This includes
     * people that may fall outside the specified Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the total_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 total_reach = 6;</code>
     * @return int|string
     */
    public function getTotalReach()
    {
        return isset($this->total_reach) ? $this->total_reach : 0;
    }

    public function hasTotalReach()
    {
        return isset($this->total_reach);
    }

    public function clearTotalReach()
    {
        unset($this->total_reach);
    }

    /**
     * Total number of unique people reached at least
     * GenerateReachForecastRequest.min_effective_frequency or
     * GenerateReachForecastRequest.effective_frequency_limit times. This includes
     * people that may fall outside the specified Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the total_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 total_reach = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalReach($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_reach = $var;

        return $this;
    }

    /**
     * Number of ad impressions that exactly matches the Targeting.
     *
     * Generated from protobuf field <code>int64 on_target_impressions = 7;</code>
     * @return int|string
     */
    public function getOnTargetImpressions()
    {
        return isset($this->on_target_impressions) ? $this->on_target_impressions : 0;
    }

    public function hasOnTargetImpressions()
    {
        return isset($this->on_target_impressions);
    }

    public function clearOnTargetImpressions()
    {
        unset($this->on_target_impressions);
    }

    /**
     * Number of ad impressions that exactly matches the Targeting.
     *
     * Generated from protobuf field <code>int64 on_target_impressions = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOnTargetImpressions($var)
    {
        GPBUtil::checkInt64($var);
        $this->on_target_impressions = $var;

        return $this;
    }

    /**
     * Total number of ad impressions. This includes impressions that may fall
     * outside the specified Targeting, due to insufficient information on
     * signed-in users.
     *
     * Generated from protobuf field <code>int64 total_impressions = 8;</code>
     * @return int|string
     */
    public function getTotalImpressions()
    {
        return isset($this->total_impressions) ? $this->total_impressions : 0;
    }

    public function hasTotalImpressions()
    {
        return isset($this->total_impressions);
    }

    public function clearTotalImpressions()
    {
        unset($this->total_impressions);
    }

    /**
     * Total number of ad impressions. This includes impressions that may fall
     * outside the specified Targeting, due to insufficient information on
     * signed-in users.
     *
     * Generated from protobuf field <code>int64 total_impressions = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalImpressions($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_impressions = $var;

        return $this;
    }

    /**
     * Number of times the ad's impressions were considered viewable.
     * See https://support.google.com/google-ads/answer/7029393 for
     * more information about what makes an ad viewable and how
     * viewability is measured.
     *
     * Generated from protobuf field <code>int64 viewable_impressions = 9;</code>
     * @return int|string
     */
    public function getViewableImpressions()
    {
        return isset($this->viewable_impressions) ? $this->viewable_impressions : 0;
    }

    public function hasViewableImpressions()
    {
        return isset($this->viewable_impressions);
    }

    public function clearViewableImpressions()
    {
        unset($this->viewable_impressions);
    }

    /**
     * Number of times the ad's impressions were considered viewable.
     * See https://support.google.com/google-ads/answer/7029393 for
     * more information about what makes an ad viewable and how
     * viewability is measured.
     *
     * Generated from protobuf field <code>int64 viewable_impressions = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setViewableImpressions($var)
    {
        GPBUtil::checkInt64($var);
        $this->viewable_impressions = $var;

        return $this;
    }

    /**
     * A list of effective frequency forecasts. The list is ordered starting with
     * 1+ and ending with the value set in
     * GenerateReachForecastRequest.effective_frequency_limit. If no
     * effective_frequency_limit was set, this list will be empty.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.services.EffectiveFrequencyBreakdown effective_frequency_breakdowns = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEffectiveFrequencyBreakdowns()
    {
        return $this->effective_frequency_breakdowns;
    }

    /**
     * A list of effective frequency forecasts. The list is ordered starting with
     * 1+ and ending with the value set in
     * GenerateReachForecastRequest.effective_frequency_limit. If no
     * effective_frequency_limit was set, this list will be empty.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.services.EffectiveFrequencyBreakdown effective_frequency_breakdowns = 10;</code>
     * @param \Google\Ads\GoogleAds\V8\Services\EffectiveFrequencyBreakdown[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEffectiveFrequencyBreakdowns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V8\Services\EffectiveFrequencyBreakdown::class);
        $this->effective_frequency_breakdowns = $arr;

        return $this;
    }

}

