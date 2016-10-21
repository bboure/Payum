<?php
namespace Payum\Core\Request;

use Payum\Core\Model\ModelAggregateInterface;
use Payum\Core\Model\ModelAwareInterface;

interface GetErrorInterface extends ModelAwareInterface, ModelAggregateInterface
{
    /**
     * @return string
     */
    public function getValue();

    /**
     * @return string
     */
    public function getOriginalErrorCode();

    /**
     * @return string
     */
    public function setOriginalErrorCode($error_code);

    /**
     * @return string
     */
    public function getOriginalErrorMessage();

    /**
     * @return string
     */
    public function setOriginalErrorMessage($error_message);

    /**
     * @return void
     */
    public function markInvalidCreditCard();

    /**
     * @return void
     */
    public function markExpiredCreditCard();

    /**
     * @return void
     */
    public function markDeclinedCreditCard();

    /**
     * @return boolean
     */
    public function markMissingCreditCard();

    /**
     * @return boolean
     */
    public function markUnknown();

    /**
     * @return boolean
     */
    public function isInvalidCreditCard();

    /**
     * @return boolean
     */
    public function isExpiredCreditCard();

    /**
     * @return boolean
     */
    public function isDeclinedCreditCard();

    /**
     * @return boolean
     */
    public function isMissingCreditCard();

    /**
     * @return boolean
     */
    public function isUnknown();
}
