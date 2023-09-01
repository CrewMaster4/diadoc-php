<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/InvoiceDocflow.proto

namespace Diadoc\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Docflow.InvoiceCorrectionRequestDocflow</code>
 */
class InvoiceCorrectionRequestDocflow extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool IsFinished = 1;</code>
     */
    private $IsFinished = false;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.SignedAttachment CorrectionRequestAttachment = 2;</code>
     */
    private $CorrectionRequestAttachment = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.ReceiptDocflow ReceiptDocflow = 3;</code>
     */
    private $ReceiptDocflow = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsFinished
     *     @type \Diadoc\Proto\Docflow\SignedAttachment $CorrectionRequestAttachment
     *     @type \Diadoc\Proto\Docflow\ReceiptDocflow $ReceiptDocflow
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\InvoiceDocflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool IsFinished = 1;</code>
     * @return bool
     */
    public function getIsFinished()
    {
        return $this->IsFinished;
    }

    /**
     * Generated from protobuf field <code>bool IsFinished = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinished($var)
    {
        GPBUtil::checkBool($var);
        $this->IsFinished = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.SignedAttachment CorrectionRequestAttachment = 2;</code>
     * @return \Diadoc\Proto\Docflow\SignedAttachment
     */
    public function getCorrectionRequestAttachment()
    {
        return $this->CorrectionRequestAttachment;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.SignedAttachment CorrectionRequestAttachment = 2;</code>
     * @param \Diadoc\Proto\Docflow\SignedAttachment $var
     * @return $this
     */
    public function setCorrectionRequestAttachment($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\SignedAttachment::class);
        $this->CorrectionRequestAttachment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.ReceiptDocflow ReceiptDocflow = 3;</code>
     * @return \Diadoc\Proto\Docflow\ReceiptDocflow
     */
    public function getReceiptDocflow()
    {
        return $this->ReceiptDocflow;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.ReceiptDocflow ReceiptDocflow = 3;</code>
     * @param \Diadoc\Proto\Docflow\ReceiptDocflow $var
     * @return $this
     */
    public function setReceiptDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\ReceiptDocflow::class);
        $this->ReceiptDocflow = $var;

        return $this;
    }

}

