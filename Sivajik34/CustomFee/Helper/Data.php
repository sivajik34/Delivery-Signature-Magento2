<?php

namespace Sivajik34\CustomFee\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * Delivery sign fee config path
     */
    const CONFIG_DELIVERYSIGN_FEE = 'customfee/customfee/customfee_amount';
    const CONFIG_DELIVERYSIGN_IS_ENABLED = 'customfee/customfee/status';
    const CONFIG_MINIMUM_ORDER_AMOUNT = 'customfee/customfee/minimum_order_amount';
    const CONFIG_FEE_LABEL = 'customfee/customfee/name';
    /**
     * Get delivery sign fee
     *
     * @return mixed
     */
    public function getCustomFeeFee()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $fee = $this->scopeConfig->getValue(self::CONFIG_DELIVERYSIGN_FEE, $storeScope);
        return $fee;
    }

    /**
     * Get delivery sign fee
     *
     * @return mixed
     */
    public function getFeeLabel()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $feeLabel = $this->scopeConfig->getValue(self::CONFIG_FEE_LABEL, $storeScope);
        return $feeLabel;
    }
    /**
     * @return mixed
     */
    public function getMinimumOrderAmount()
    {

        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $MinimumOrderAmount = $this->scopeConfig->getValue(self::CONFIG_MINIMUM_ORDER_AMOUNT, $storeScope);
        return $MinimumOrderAmount;
    }

    /**
     * @return mixed
     */
    public function isModuleEnabled()
    {

        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $isEnabled = $this->scopeConfig->getValue(self::CONFIG_DELIVERYSIGN_IS_ENABLED, $storeScope);
        return $isEnabled;
    }
}