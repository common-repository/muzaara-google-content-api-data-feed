<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/errors/bidding_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Errors;

class BiddingError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v7/errors/bidding_error.protogoogle.ads.googleads.v7.errors"�
BiddingErrorEnum"�
BiddingError
UNSPECIFIED 
UNKNOWN+
\'BIDDING_STRATEGY_TRANSITION_NOT_ALLOWED.
*CANNOT_ATTACH_BIDDING_STRATEGY_TO_CAMPAIGN+
\'INVALID_ANONYMOUS_BIDDING_STRATEGY_TYPE
!
INVALID_BIDDING_STRATEGY_TYPE
INVALID_BID3
/BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE#
CONVERSION_TRACKING_NOT_ENABLED
NOT_ENOUGH_CONVERSIONS0
,CANNOT_CREATE_CAMPAIGN_WITH_BIDDING_STRATEGYO
KCANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CAMPAIGN_LEVEL_POP_BIDDING_STRATEGY3
/BIDDING_STRATEGY_NOT_SUPPORTED_WITH_AD_SCHEDULE1
-PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER2
.PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA:
6BIDDING_STRATEGY_NOT_ALLOWED_FOR_SEARCH_ONLY_CAMPAIGNS;
7BIDDING_STRATEGY_NOT_SUPPORTED_IN_DRAFTS_OR_EXPERIMENTSI
EBIDDING_STRATEGY_TYPE_DOES_NOT_SUPPORT_PRODUCT_TYPE_ADGROUP_CRITERION
BID_TOO_SMALL
BID_TOO_BIG"
BID_TOO_MANY_FRACTIONAL_DIGITS 
INVALID_DOMAIN_NAME!$
 NOT_COMPATIBLE_WITH_PAYMENT_MODE"#
NOT_COMPATIBLE_WITH_BUDGET_TYPE#-
)NOT_COMPATIBLE_WITH_BIDDING_STRATEGY_TYPE$9
5BIDDING_STRATEGY_TYPE_INCOMPATIBLE_WITH_SHARED_BUDGET%B�
"com.google.ads.googleads.v7.errorsBBiddingErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v7/errors;errors�GAA�Google.Ads.GoogleAds.V7.Errors�Google\\Ads\\GoogleAds\\V7\\Errors�"Google::Ads::GoogleAds::V7::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

