<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocumentInfo.proto

namespace Diadoc\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Docflow.PriceListDocumentInfo</code>
 */
class PriceListDocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string PriceListEffectiveDate = 1;</code>
     */
    protected $PriceListEffectiveDate = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentDateAndNumber ContractDocumentDateAndNumber = 2;</code>
     */
    protected $ContractDocumentDateAndNumber = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $PriceListEffectiveDate
     *     @type \Diadoc\Proto\Docflow\DocumentDateAndNumber $ContractDocumentDateAndNumber
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string PriceListEffectiveDate = 1;</code>
     * @return string
     */
    public function getPriceListEffectiveDate()
    {
        return $this->PriceListEffectiveDate;
    }

    /**
     * Generated from protobuf field <code>string PriceListEffectiveDate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPriceListEffectiveDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->PriceListEffectiveDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentDateAndNumber ContractDocumentDateAndNumber = 2;</code>
     * @return \Diadoc\Proto\Docflow\DocumentDateAndNumber
     */
    public function getContractDocumentDateAndNumber()
    {
        return $this->ContractDocumentDateAndNumber;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentDateAndNumber ContractDocumentDateAndNumber = 2;</code>
     * @param \Diadoc\Proto\Docflow\DocumentDateAndNumber $var
     * @return $this
     */
    public function setContractDocumentDateAndNumber($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\DocumentDateAndNumber::class);
        $this->ContractDocumentDateAndNumber = $var;

        return $this;
    }

}

