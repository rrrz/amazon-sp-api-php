<?php
/**
 * FinancialEvents.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * OpenAPI spec version: v0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Models;

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * FinancialEvents Class Doc Comment.
 *
 * @category Class
 * @description Contains all information related to a financial event.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FinancialEvents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FinancialEvents';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_event_list' => '\Swagger\Client\Models\ShipmentEventList',
'refund_event_list' => '\Swagger\Client\Models\ShipmentEventList',
'guarantee_claim_event_list' => '\Swagger\Client\Models\ShipmentEventList',
'chargeback_event_list' => '\Swagger\Client\Models\ShipmentEventList',
'pay_with_amazon_event_list' => '\Swagger\Client\Models\PayWithAmazonEventList',
'service_provider_credit_event_list' => '\Swagger\Client\Models\SolutionProviderCreditEventList',
'retrocharge_event_list' => '\Swagger\Client\Models\RetrochargeEventList',
'rental_transaction_event_list' => '\Swagger\Client\Models\RentalTransactionEventList',
'product_ads_payment_event_list' => '\Swagger\Client\Models\ProductAdsPaymentEventList',
'service_fee_event_list' => '\Swagger\Client\Models\ServiceFeeEventList',
'seller_deal_payment_event_list' => '\Swagger\Client\Models\SellerDealPaymentEventList',
'debt_recovery_event_list' => '\Swagger\Client\Models\DebtRecoveryEventList',
'loan_servicing_event_list' => '\Swagger\Client\Models\LoanServicingEventList',
'adjustment_event_list' => '\Swagger\Client\Models\AdjustmentEventList',
'safet_reimbursement_event_list' => '\Swagger\Client\Models\SAFETReimbursementEventList',
'seller_review_enrollment_payment_event_list' => '\Swagger\Client\Models\SellerReviewEnrollmentPaymentEventList',
'fba_liquidation_event_list' => '\Swagger\Client\Models\FBALiquidationEventList',
'coupon_payment_event_list' => '\Swagger\Client\Models\CouponPaymentEventList',
'imaging_services_fee_event_list' => '\Swagger\Client\Models\ImagingServicesFeeEventList',
'network_commingling_transaction_event_list' => '\Swagger\Client\Models\NetworkComminglingTransactionEventList',
'affordability_expense_event_list' => '\Swagger\Client\Models\AffordabilityExpenseEventList',
'affordability_expense_reversal_event_list' => '\Swagger\Client\Models\AffordabilityExpenseEventList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_event_list' => null,
'refund_event_list' => null,
'guarantee_claim_event_list' => null,
'chargeback_event_list' => null,
'pay_with_amazon_event_list' => null,
'service_provider_credit_event_list' => null,
'retrocharge_event_list' => null,
'rental_transaction_event_list' => null,
'product_ads_payment_event_list' => null,
'service_fee_event_list' => null,
'seller_deal_payment_event_list' => null,
'debt_recovery_event_list' => null,
'loan_servicing_event_list' => null,
'adjustment_event_list' => null,
'safet_reimbursement_event_list' => null,
'seller_review_enrollment_payment_event_list' => null,
'fba_liquidation_event_list' => null,
'coupon_payment_event_list' => null,
'imaging_services_fee_event_list' => null,
'network_commingling_transaction_event_list' => null,
'affordability_expense_event_list' => null,
'affordability_expense_reversal_event_list' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipment_event_list' => 'ShipmentEventList',
'refund_event_list' => 'RefundEventList',
'guarantee_claim_event_list' => 'GuaranteeClaimEventList',
'chargeback_event_list' => 'ChargebackEventList',
'pay_with_amazon_event_list' => 'PayWithAmazonEventList',
'service_provider_credit_event_list' => 'ServiceProviderCreditEventList',
'retrocharge_event_list' => 'RetrochargeEventList',
'rental_transaction_event_list' => 'RentalTransactionEventList',
'product_ads_payment_event_list' => 'ProductAdsPaymentEventList',
'service_fee_event_list' => 'ServiceFeeEventList',
'seller_deal_payment_event_list' => 'SellerDealPaymentEventList',
'debt_recovery_event_list' => 'DebtRecoveryEventList',
'loan_servicing_event_list' => 'LoanServicingEventList',
'adjustment_event_list' => 'AdjustmentEventList',
'safet_reimbursement_event_list' => 'SAFETReimbursementEventList',
'seller_review_enrollment_payment_event_list' => 'SellerReviewEnrollmentPaymentEventList',
'fba_liquidation_event_list' => 'FBALiquidationEventList',
'coupon_payment_event_list' => 'CouponPaymentEventList',
'imaging_services_fee_event_list' => 'ImagingServicesFeeEventList',
'network_commingling_transaction_event_list' => 'NetworkComminglingTransactionEventList',
'affordability_expense_event_list' => 'AffordabilityExpenseEventList',
'affordability_expense_reversal_event_list' => 'AffordabilityExpenseReversalEventList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_event_list' => 'setShipmentEventList',
'refund_event_list' => 'setRefundEventList',
'guarantee_claim_event_list' => 'setGuaranteeClaimEventList',
'chargeback_event_list' => 'setChargebackEventList',
'pay_with_amazon_event_list' => 'setPayWithAmazonEventList',
'service_provider_credit_event_list' => 'setServiceProviderCreditEventList',
'retrocharge_event_list' => 'setRetrochargeEventList',
'rental_transaction_event_list' => 'setRentalTransactionEventList',
'product_ads_payment_event_list' => 'setProductAdsPaymentEventList',
'service_fee_event_list' => 'setServiceFeeEventList',
'seller_deal_payment_event_list' => 'setSellerDealPaymentEventList',
'debt_recovery_event_list' => 'setDebtRecoveryEventList',
'loan_servicing_event_list' => 'setLoanServicingEventList',
'adjustment_event_list' => 'setAdjustmentEventList',
'safet_reimbursement_event_list' => 'setSafetReimbursementEventList',
'seller_review_enrollment_payment_event_list' => 'setSellerReviewEnrollmentPaymentEventList',
'fba_liquidation_event_list' => 'setFbaLiquidationEventList',
'coupon_payment_event_list' => 'setCouponPaymentEventList',
'imaging_services_fee_event_list' => 'setImagingServicesFeeEventList',
'network_commingling_transaction_event_list' => 'setNetworkComminglingTransactionEventList',
'affordability_expense_event_list' => 'setAffordabilityExpenseEventList',
'affordability_expense_reversal_event_list' => 'setAffordabilityExpenseReversalEventList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_event_list' => 'getShipmentEventList',
'refund_event_list' => 'getRefundEventList',
'guarantee_claim_event_list' => 'getGuaranteeClaimEventList',
'chargeback_event_list' => 'getChargebackEventList',
'pay_with_amazon_event_list' => 'getPayWithAmazonEventList',
'service_provider_credit_event_list' => 'getServiceProviderCreditEventList',
'retrocharge_event_list' => 'getRetrochargeEventList',
'rental_transaction_event_list' => 'getRentalTransactionEventList',
'product_ads_payment_event_list' => 'getProductAdsPaymentEventList',
'service_fee_event_list' => 'getServiceFeeEventList',
'seller_deal_payment_event_list' => 'getSellerDealPaymentEventList',
'debt_recovery_event_list' => 'getDebtRecoveryEventList',
'loan_servicing_event_list' => 'getLoanServicingEventList',
'adjustment_event_list' => 'getAdjustmentEventList',
'safet_reimbursement_event_list' => 'getSafetReimbursementEventList',
'seller_review_enrollment_payment_event_list' => 'getSellerReviewEnrollmentPaymentEventList',
'fba_liquidation_event_list' => 'getFbaLiquidationEventList',
'coupon_payment_event_list' => 'getCouponPaymentEventList',
'imaging_services_fee_event_list' => 'getImagingServicesFeeEventList',
'network_commingling_transaction_event_list' => 'getNetworkComminglingTransactionEventList',
'affordability_expense_event_list' => 'getAffordabilityExpenseEventList',
'affordability_expense_reversal_event_list' => 'getAffordabilityExpenseReversalEventList',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipment_event_list'] = isset($data['shipment_event_list']) ? $data['shipment_event_list'] : null;
        $this->container['refund_event_list'] = isset($data['refund_event_list']) ? $data['refund_event_list'] : null;
        $this->container['guarantee_claim_event_list'] = isset($data['guarantee_claim_event_list']) ? $data['guarantee_claim_event_list'] : null;
        $this->container['chargeback_event_list'] = isset($data['chargeback_event_list']) ? $data['chargeback_event_list'] : null;
        $this->container['pay_with_amazon_event_list'] = isset($data['pay_with_amazon_event_list']) ? $data['pay_with_amazon_event_list'] : null;
        $this->container['service_provider_credit_event_list'] = isset($data['service_provider_credit_event_list']) ? $data['service_provider_credit_event_list'] : null;
        $this->container['retrocharge_event_list'] = isset($data['retrocharge_event_list']) ? $data['retrocharge_event_list'] : null;
        $this->container['rental_transaction_event_list'] = isset($data['rental_transaction_event_list']) ? $data['rental_transaction_event_list'] : null;
        $this->container['product_ads_payment_event_list'] = isset($data['product_ads_payment_event_list']) ? $data['product_ads_payment_event_list'] : null;
        $this->container['service_fee_event_list'] = isset($data['service_fee_event_list']) ? $data['service_fee_event_list'] : null;
        $this->container['seller_deal_payment_event_list'] = isset($data['seller_deal_payment_event_list']) ? $data['seller_deal_payment_event_list'] : null;
        $this->container['debt_recovery_event_list'] = isset($data['debt_recovery_event_list']) ? $data['debt_recovery_event_list'] : null;
        $this->container['loan_servicing_event_list'] = isset($data['loan_servicing_event_list']) ? $data['loan_servicing_event_list'] : null;
        $this->container['adjustment_event_list'] = isset($data['adjustment_event_list']) ? $data['adjustment_event_list'] : null;
        $this->container['safet_reimbursement_event_list'] = isset($data['safet_reimbursement_event_list']) ? $data['safet_reimbursement_event_list'] : null;
        $this->container['seller_review_enrollment_payment_event_list'] = isset($data['seller_review_enrollment_payment_event_list']) ? $data['seller_review_enrollment_payment_event_list'] : null;
        $this->container['fba_liquidation_event_list'] = isset($data['fba_liquidation_event_list']) ? $data['fba_liquidation_event_list'] : null;
        $this->container['coupon_payment_event_list'] = isset($data['coupon_payment_event_list']) ? $data['coupon_payment_event_list'] : null;
        $this->container['imaging_services_fee_event_list'] = isset($data['imaging_services_fee_event_list']) ? $data['imaging_services_fee_event_list'] : null;
        $this->container['network_commingling_transaction_event_list'] = isset($data['network_commingling_transaction_event_list']) ? $data['network_commingling_transaction_event_list'] : null;
        $this->container['affordability_expense_event_list'] = isset($data['affordability_expense_event_list']) ? $data['affordability_expense_event_list'] : null;
        $this->container['affordability_expense_reversal_event_list'] = isset($data['affordability_expense_reversal_event_list']) ? $data['affordability_expense_reversal_event_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets shipment_event_list.
     *
     * @return \Swagger\Client\Models\ShipmentEventList
     */
    public function getShipmentEventList()
    {
        return $this->container['shipment_event_list'];
    }

    /**
     * Sets shipment_event_list.
     *
     * @param \Swagger\Client\Models\ShipmentEventList $shipment_event_list shipment_event_list
     *
     * @return $this
     */
    public function setShipmentEventList($shipment_event_list)
    {
        $this->container['shipment_event_list'] = $shipment_event_list;

        return $this;
    }

    /**
     * Gets refund_event_list.
     *
     * @return \Swagger\Client\Models\ShipmentEventList
     */
    public function getRefundEventList()
    {
        return $this->container['refund_event_list'];
    }

    /**
     * Sets refund_event_list.
     *
     * @param \Swagger\Client\Models\ShipmentEventList $refund_event_list refund_event_list
     *
     * @return $this
     */
    public function setRefundEventList($refund_event_list)
    {
        $this->container['refund_event_list'] = $refund_event_list;

        return $this;
    }

    /**
     * Gets guarantee_claim_event_list.
     *
     * @return \Swagger\Client\Models\ShipmentEventList
     */
    public function getGuaranteeClaimEventList()
    {
        return $this->container['guarantee_claim_event_list'];
    }

    /**
     * Sets guarantee_claim_event_list.
     *
     * @param \Swagger\Client\Models\ShipmentEventList $guarantee_claim_event_list guarantee_claim_event_list
     *
     * @return $this
     */
    public function setGuaranteeClaimEventList($guarantee_claim_event_list)
    {
        $this->container['guarantee_claim_event_list'] = $guarantee_claim_event_list;

        return $this;
    }

    /**
     * Gets chargeback_event_list.
     *
     * @return \Swagger\Client\Models\ShipmentEventList
     */
    public function getChargebackEventList()
    {
        return $this->container['chargeback_event_list'];
    }

    /**
     * Sets chargeback_event_list.
     *
     * @param \Swagger\Client\Models\ShipmentEventList $chargeback_event_list chargeback_event_list
     *
     * @return $this
     */
    public function setChargebackEventList($chargeback_event_list)
    {
        $this->container['chargeback_event_list'] = $chargeback_event_list;

        return $this;
    }

    /**
     * Gets pay_with_amazon_event_list.
     *
     * @return \Swagger\Client\Models\PayWithAmazonEventList
     */
    public function getPayWithAmazonEventList()
    {
        return $this->container['pay_with_amazon_event_list'];
    }

    /**
     * Sets pay_with_amazon_event_list.
     *
     * @param \Swagger\Client\Models\PayWithAmazonEventList $pay_with_amazon_event_list pay_with_amazon_event_list
     *
     * @return $this
     */
    public function setPayWithAmazonEventList($pay_with_amazon_event_list)
    {
        $this->container['pay_with_amazon_event_list'] = $pay_with_amazon_event_list;

        return $this;
    }

    /**
     * Gets service_provider_credit_event_list.
     *
     * @return \Swagger\Client\Models\SolutionProviderCreditEventList
     */
    public function getServiceProviderCreditEventList()
    {
        return $this->container['service_provider_credit_event_list'];
    }

    /**
     * Sets service_provider_credit_event_list.
     *
     * @param \Swagger\Client\Models\SolutionProviderCreditEventList $service_provider_credit_event_list service_provider_credit_event_list
     *
     * @return $this
     */
    public function setServiceProviderCreditEventList($service_provider_credit_event_list)
    {
        $this->container['service_provider_credit_event_list'] = $service_provider_credit_event_list;

        return $this;
    }

    /**
     * Gets retrocharge_event_list.
     *
     * @return \Swagger\Client\Models\RetrochargeEventList
     */
    public function getRetrochargeEventList()
    {
        return $this->container['retrocharge_event_list'];
    }

    /**
     * Sets retrocharge_event_list.
     *
     * @param \Swagger\Client\Models\RetrochargeEventList $retrocharge_event_list retrocharge_event_list
     *
     * @return $this
     */
    public function setRetrochargeEventList($retrocharge_event_list)
    {
        $this->container['retrocharge_event_list'] = $retrocharge_event_list;

        return $this;
    }

    /**
     * Gets rental_transaction_event_list.
     *
     * @return \Swagger\Client\Models\RentalTransactionEventList
     */
    public function getRentalTransactionEventList()
    {
        return $this->container['rental_transaction_event_list'];
    }

    /**
     * Sets rental_transaction_event_list.
     *
     * @param \Swagger\Client\Models\RentalTransactionEventList $rental_transaction_event_list rental_transaction_event_list
     *
     * @return $this
     */
    public function setRentalTransactionEventList($rental_transaction_event_list)
    {
        $this->container['rental_transaction_event_list'] = $rental_transaction_event_list;

        return $this;
    }

    /**
     * Gets product_ads_payment_event_list.
     *
     * @return \Swagger\Client\Models\ProductAdsPaymentEventList
     */
    public function getProductAdsPaymentEventList()
    {
        return $this->container['product_ads_payment_event_list'];
    }

    /**
     * Sets product_ads_payment_event_list.
     *
     * @param \Swagger\Client\Models\ProductAdsPaymentEventList $product_ads_payment_event_list product_ads_payment_event_list
     *
     * @return $this
     */
    public function setProductAdsPaymentEventList($product_ads_payment_event_list)
    {
        $this->container['product_ads_payment_event_list'] = $product_ads_payment_event_list;

        return $this;
    }

    /**
     * Gets service_fee_event_list.
     *
     * @return \Swagger\Client\Models\ServiceFeeEventList
     */
    public function getServiceFeeEventList()
    {
        return $this->container['service_fee_event_list'];
    }

    /**
     * Sets service_fee_event_list.
     *
     * @param \Swagger\Client\Models\ServiceFeeEventList $service_fee_event_list service_fee_event_list
     *
     * @return $this
     */
    public function setServiceFeeEventList($service_fee_event_list)
    {
        $this->container['service_fee_event_list'] = $service_fee_event_list;

        return $this;
    }

    /**
     * Gets seller_deal_payment_event_list.
     *
     * @return \Swagger\Client\Models\SellerDealPaymentEventList
     */
    public function getSellerDealPaymentEventList()
    {
        return $this->container['seller_deal_payment_event_list'];
    }

    /**
     * Sets seller_deal_payment_event_list.
     *
     * @param \Swagger\Client\Models\SellerDealPaymentEventList $seller_deal_payment_event_list seller_deal_payment_event_list
     *
     * @return $this
     */
    public function setSellerDealPaymentEventList($seller_deal_payment_event_list)
    {
        $this->container['seller_deal_payment_event_list'] = $seller_deal_payment_event_list;

        return $this;
    }

    /**
     * Gets debt_recovery_event_list.
     *
     * @return \Swagger\Client\Models\DebtRecoveryEventList
     */
    public function getDebtRecoveryEventList()
    {
        return $this->container['debt_recovery_event_list'];
    }

    /**
     * Sets debt_recovery_event_list.
     *
     * @param \Swagger\Client\Models\DebtRecoveryEventList $debt_recovery_event_list debt_recovery_event_list
     *
     * @return $this
     */
    public function setDebtRecoveryEventList($debt_recovery_event_list)
    {
        $this->container['debt_recovery_event_list'] = $debt_recovery_event_list;

        return $this;
    }

    /**
     * Gets loan_servicing_event_list.
     *
     * @return \Swagger\Client\Models\LoanServicingEventList
     */
    public function getLoanServicingEventList()
    {
        return $this->container['loan_servicing_event_list'];
    }

    /**
     * Sets loan_servicing_event_list.
     *
     * @param \Swagger\Client\Models\LoanServicingEventList $loan_servicing_event_list loan_servicing_event_list
     *
     * @return $this
     */
    public function setLoanServicingEventList($loan_servicing_event_list)
    {
        $this->container['loan_servicing_event_list'] = $loan_servicing_event_list;

        return $this;
    }

    /**
     * Gets adjustment_event_list.
     *
     * @return \Swagger\Client\Models\AdjustmentEventList
     */
    public function getAdjustmentEventList()
    {
        return $this->container['adjustment_event_list'];
    }

    /**
     * Sets adjustment_event_list.
     *
     * @param \Swagger\Client\Models\AdjustmentEventList $adjustment_event_list adjustment_event_list
     *
     * @return $this
     */
    public function setAdjustmentEventList($adjustment_event_list)
    {
        $this->container['adjustment_event_list'] = $adjustment_event_list;

        return $this;
    }

    /**
     * Gets safet_reimbursement_event_list.
     *
     * @return \Swagger\Client\Models\SAFETReimbursementEventList
     */
    public function getSafetReimbursementEventList()
    {
        return $this->container['safet_reimbursement_event_list'];
    }

    /**
     * Sets safet_reimbursement_event_list.
     *
     * @param \Swagger\Client\Models\SAFETReimbursementEventList $safet_reimbursement_event_list safet_reimbursement_event_list
     *
     * @return $this
     */
    public function setSafetReimbursementEventList($safet_reimbursement_event_list)
    {
        $this->container['safet_reimbursement_event_list'] = $safet_reimbursement_event_list;

        return $this;
    }

    /**
     * Gets seller_review_enrollment_payment_event_list.
     *
     * @return \Swagger\Client\Models\SellerReviewEnrollmentPaymentEventList
     */
    public function getSellerReviewEnrollmentPaymentEventList()
    {
        return $this->container['seller_review_enrollment_payment_event_list'];
    }

    /**
     * Sets seller_review_enrollment_payment_event_list.
     *
     * @param \Swagger\Client\Models\SellerReviewEnrollmentPaymentEventList $seller_review_enrollment_payment_event_list seller_review_enrollment_payment_event_list
     *
     * @return $this
     */
    public function setSellerReviewEnrollmentPaymentEventList($seller_review_enrollment_payment_event_list)
    {
        $this->container['seller_review_enrollment_payment_event_list'] = $seller_review_enrollment_payment_event_list;

        return $this;
    }

    /**
     * Gets fba_liquidation_event_list.
     *
     * @return \Swagger\Client\Models\FBALiquidationEventList
     */
    public function getFbaLiquidationEventList()
    {
        return $this->container['fba_liquidation_event_list'];
    }

    /**
     * Sets fba_liquidation_event_list.
     *
     * @param \Swagger\Client\Models\FBALiquidationEventList $fba_liquidation_event_list fba_liquidation_event_list
     *
     * @return $this
     */
    public function setFbaLiquidationEventList($fba_liquidation_event_list)
    {
        $this->container['fba_liquidation_event_list'] = $fba_liquidation_event_list;

        return $this;
    }

    /**
     * Gets coupon_payment_event_list.
     *
     * @return \Swagger\Client\Models\CouponPaymentEventList
     */
    public function getCouponPaymentEventList()
    {
        return $this->container['coupon_payment_event_list'];
    }

    /**
     * Sets coupon_payment_event_list.
     *
     * @param \Swagger\Client\Models\CouponPaymentEventList $coupon_payment_event_list coupon_payment_event_list
     *
     * @return $this
     */
    public function setCouponPaymentEventList($coupon_payment_event_list)
    {
        $this->container['coupon_payment_event_list'] = $coupon_payment_event_list;

        return $this;
    }

    /**
     * Gets imaging_services_fee_event_list.
     *
     * @return \Swagger\Client\Models\ImagingServicesFeeEventList
     */
    public function getImagingServicesFeeEventList()
    {
        return $this->container['imaging_services_fee_event_list'];
    }

    /**
     * Sets imaging_services_fee_event_list.
     *
     * @param \Swagger\Client\Models\ImagingServicesFeeEventList $imaging_services_fee_event_list imaging_services_fee_event_list
     *
     * @return $this
     */
    public function setImagingServicesFeeEventList($imaging_services_fee_event_list)
    {
        $this->container['imaging_services_fee_event_list'] = $imaging_services_fee_event_list;

        return $this;
    }

    /**
     * Gets network_commingling_transaction_event_list.
     *
     * @return \Swagger\Client\Models\NetworkComminglingTransactionEventList
     */
    public function getNetworkComminglingTransactionEventList()
    {
        return $this->container['network_commingling_transaction_event_list'];
    }

    /**
     * Sets network_commingling_transaction_event_list.
     *
     * @param \Swagger\Client\Models\NetworkComminglingTransactionEventList $network_commingling_transaction_event_list network_commingling_transaction_event_list
     *
     * @return $this
     */
    public function setNetworkComminglingTransactionEventList($network_commingling_transaction_event_list)
    {
        $this->container['network_commingling_transaction_event_list'] = $network_commingling_transaction_event_list;

        return $this;
    }

    /**
     * Gets affordability_expense_event_list.
     *
     * @return \Swagger\Client\Models\AffordabilityExpenseEventList
     */
    public function getAffordabilityExpenseEventList()
    {
        return $this->container['affordability_expense_event_list'];
    }

    /**
     * Sets affordability_expense_event_list.
     *
     * @param \Swagger\Client\Models\AffordabilityExpenseEventList $affordability_expense_event_list affordability_expense_event_list
     *
     * @return $this
     */
    public function setAffordabilityExpenseEventList($affordability_expense_event_list)
    {
        $this->container['affordability_expense_event_list'] = $affordability_expense_event_list;

        return $this;
    }

    /**
     * Gets affordability_expense_reversal_event_list.
     *
     * @return \Swagger\Client\Models\AffordabilityExpenseEventList
     */
    public function getAffordabilityExpenseReversalEventList()
    {
        return $this->container['affordability_expense_reversal_event_list'];
    }

    /**
     * Sets affordability_expense_reversal_event_list.
     *
     * @param \Swagger\Client\Models\AffordabilityExpenseEventList $affordability_expense_reversal_event_list affordability_expense_reversal_event_list
     *
     * @return $this
     */
    public function setAffordabilityExpenseReversalEventList($affordability_expense_reversal_event_list)
    {
        $this->container['affordability_expense_reversal_event_list'] = $affordability_expense_reversal_event_list;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
