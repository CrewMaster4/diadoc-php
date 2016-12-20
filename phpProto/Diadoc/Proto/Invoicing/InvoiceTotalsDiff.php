<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/InvoiceInfo.proto

namespace Diadoc\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Invoicing.InvoiceTotalsDiff</code>
 */
class InvoiceTotalsDiff extends \Google\Protobuf\Internal\Message
{
    /**
     * сумма без учета налога
     *
     * Generated from protobuf field <code>string TotalWithVatExcluded = 1;</code>
     */
    private $TotalWithVatExcluded = '';
    /**
     * сумма налога
     *
     * Generated from protobuf field <code>string Vat = 2;</code>
     */
    private $Vat = '';
    /**
     * сумма всего
     *
     * Generated from protobuf field <code>string Total = 3;</code>
     */
    private $Total = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $TotalWithVatExcluded
     *           сумма без учета налога
     *     @type string $Vat
     *           сумма налога
     *     @type string $Total
     *           сумма всего
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\InvoiceInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * сумма без учета налога
     *
     * Generated from protobuf field <code>string TotalWithVatExcluded = 1;</code>
     * @return string
     */
    public function getTotalWithVatExcluded()
    {
        return $this->TotalWithVatExcluded;
    }

    /**
     * сумма без учета налога
     *
     * Generated from protobuf field <code>string TotalWithVatExcluded = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalWithVatExcluded($var)
    {
        GPBUtil::checkString($var, True);
        $this->TotalWithVatExcluded = $var;

        return $this;
    }

    /**
     * сумма налога
     *
     * Generated from protobuf field <code>string Vat = 2;</code>
     * @return string
     */
    public function getVat()
    {
        return $this->Vat;
    }

    /**
     * сумма налога
     *
     * Generated from protobuf field <code>string Vat = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vat = $var;

        return $this;
    }

    /**
     * сумма всего
     *
     * Generated from protobuf field <code>string Total = 3;</code>
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * сумма всего
     *
     * Generated from protobuf field <code>string Total = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->Total = $var;

        return $this;
    }

}

