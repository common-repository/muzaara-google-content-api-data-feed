<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/conversion_value_rule_set_service.proto

namespace Google\Ads\GoogleAds\V8\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ConversionValueRuleSetService.MutateConversionValueRuleSets][google.ads.googleads.v8.services.ConversionValueRuleSetService.MutateConversionValueRuleSets].
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.services.MutateConversionValueRuleSetsRequest</code>
 */
class MutateConversionValueRuleSetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer whose conversion value rule sets are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The list of operations to perform on individual conversion value rule sets.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.services.ConversionValueRuleSetOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $operations;
    /**
     * If true, successful operations will be carried out and invalid
     * operations will return errors. If false, all operations will be carried
     * out in one transaction if and only if they are all valid.
     * Default is false.
     *
     * Generated from protobuf field <code>bool partial_failure = 5;</code>
     */
    protected $partial_failure = false;
    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    protected $validate_only = false;
    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned post mutation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 4;</code>
     */
    protected $response_content_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer whose conversion value rule sets are being modified.
     *     @type \Google\Ads\GoogleAds\V8\Services\ConversionValueRuleSetOperation[]|\Google\Protobuf\Internal\RepeatedField $operations
     *           Required. The list of operations to perform on individual conversion value rule sets.
     *     @type bool $partial_failure
     *           If true, successful operations will be carried out and invalid
     *           operations will return errors. If false, all operations will be carried
     *           out in one transaction if and only if they are all valid.
     *           Default is false.
     *     @type bool $validate_only
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     *     @type int $response_content_type
     *           The response content type setting. Determines whether the mutable resource
     *           or just the resource name should be returned post mutation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Services\ConversionValueRuleSetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer whose conversion value rule sets are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer whose conversion value rule sets are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The list of operations to perform on individual conversion value rule sets.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.services.ConversionValueRuleSetOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Required. The list of operations to perform on individual conversion value rule sets.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.services.ConversionValueRuleSetOperation operations = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V8\Services\ConversionValueRuleSetOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V8\Services\ConversionValueRuleSetOperation::class);
        $this->operations = $arr;

        return $this;
    }

    /**
     * If true, successful operations will be carried out and invalid
     * operations will return errors. If false, all operations will be carried
     * out in one transaction if and only if they are all valid.
     * Default is false.
     *
     * Generated from protobuf field <code>bool partial_failure = 5;</code>
     * @return bool
     */
    public function getPartialFailure()
    {
        return $this->partial_failure;
    }

    /**
     * If true, successful operations will be carried out and invalid
     * operations will return errors. If false, all operations will be carried
     * out in one transaction if and only if they are all valid.
     * Default is false.
     *
     * Generated from protobuf field <code>bool partial_failure = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPartialFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->partial_failure = $var;

        return $this;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned post mutation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 4;</code>
     * @return int
     */
    public function getResponseContentType()
    {
        return $this->response_content_type;
    }

    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned post mutation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseContentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V8\Enums\ResponseContentTypeEnum\ResponseContentType::class);
        $this->response_content_type = $var;

        return $this;
    }

}

