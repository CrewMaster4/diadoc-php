<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.AcceptanceCertificateAttachment</code>
 */
class AcceptanceCertificateAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     */
    private $SignedContent = null;
    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     */
    private $FileName = '';
    /**
     * Generated from protobuf field <code>string Comment = 3;</code>
     */
    private $Comment = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId InitialDocumentIds = 4;</code>
     */
    private $InitialDocumentIds;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId SubordinateDocumentIds = 5;</code>
     */
    private $SubordinateDocumentIds;
    /**
     * Generated from protobuf field <code>string DocumentDate = 6;</code>
     */
    private $DocumentDate = '';
    /**
     * Generated from protobuf field <code>string DocumentNumber = 7;</code>
     */
    private $DocumentNumber = '';
    /**
     * Generated from protobuf field <code>string Total = 8;</code>
     */
    private $Total = '';
    /**
     * Generated from protobuf field <code>string CustomDocumentId = 9;</code>
     */
    private $CustomDocumentId = '';
    /**
     * Generated from protobuf field <code>string Vat = 10;</code>
     */
    private $Vat = '';
    /**
     * Generated from protobuf field <code>string Grounds = 11;</code>
     */
    private $Grounds = '';
    /**
     * Generated from protobuf field <code>bool NeedReceipt = 12;</code>
     */
    private $NeedReceipt = false;
    /**
     * Generated from protobuf field <code>bool NeedRecipientSignature = 13;</code>
     */
    private $NeedRecipientSignature = false;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CustomDataItem CustomData = 14;</code>
     */
    private $CustomData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\Events\SignedContent $SignedContent
     *     @type string $FileName
     *     @type string $Comment
     *     @type \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $InitialDocumentIds
     *     @type \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $SubordinateDocumentIds
     *     @type string $DocumentDate
     *     @type string $DocumentNumber
     *     @type string $Total
     *     @type string $CustomDocumentId
     *     @type string $Vat
     *     @type string $Grounds
     *     @type bool $NeedReceipt
     *     @type bool $NeedRecipientSignature
     *     @type \Diadoc\Proto\CustomDataItem[]|\Google\Protobuf\Internal\RepeatedField $CustomData
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     * @return \Diadoc\Proto\Events\SignedContent
     */
    public function getSignedContent()
    {
        return $this->SignedContent;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     * @param \Diadoc\Proto\Events\SignedContent $var
     * @return $this
     */
    public function setSignedContent($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Events\SignedContent::class);
        $this->SignedContent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Comment = 3;</code>
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Generated from protobuf field <code>string Comment = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->Comment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId InitialDocumentIds = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInitialDocumentIds()
    {
        return $this->InitialDocumentIds;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId InitialDocumentIds = 4;</code>
     * @param \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInitialDocumentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\DocumentId::class);
        $this->InitialDocumentIds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId SubordinateDocumentIds = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubordinateDocumentIds()
    {
        return $this->SubordinateDocumentIds;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId SubordinateDocumentIds = 5;</code>
     * @param \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubordinateDocumentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\DocumentId::class);
        $this->SubordinateDocumentIds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DocumentDate = 6;</code>
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }

    /**
     * Generated from protobuf field <code>string DocumentDate = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DocumentNumber = 7;</code>
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * Generated from protobuf field <code>string DocumentNumber = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Total = 8;</code>
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Generated from protobuf field <code>string Total = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->Total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string CustomDocumentId = 9;</code>
     * @return string
     */
    public function getCustomDocumentId()
    {
        return $this->CustomDocumentId;
    }

    /**
     * Generated from protobuf field <code>string CustomDocumentId = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CustomDocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Vat = 10;</code>
     * @return string
     */
    public function getVat()
    {
        return $this->Vat;
    }

    /**
     * Generated from protobuf field <code>string Vat = 10;</code>
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
     * Generated from protobuf field <code>string Grounds = 11;</code>
     * @return string
     */
    public function getGrounds()
    {
        return $this->Grounds;
    }

    /**
     * Generated from protobuf field <code>string Grounds = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setGrounds($var)
    {
        GPBUtil::checkString($var, True);
        $this->Grounds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool NeedReceipt = 12;</code>
     * @return bool
     */
    public function getNeedReceipt()
    {
        return $this->NeedReceipt;
    }

    /**
     * Generated from protobuf field <code>bool NeedReceipt = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedReceipt($var)
    {
        GPBUtil::checkBool($var);
        $this->NeedReceipt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool NeedRecipientSignature = 13;</code>
     * @return bool
     */
    public function getNeedRecipientSignature()
    {
        return $this->NeedRecipientSignature;
    }

    /**
     * Generated from protobuf field <code>bool NeedRecipientSignature = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedRecipientSignature($var)
    {
        GPBUtil::checkBool($var);
        $this->NeedRecipientSignature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CustomDataItem CustomData = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomData()
    {
        return $this->CustomData;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CustomDataItem CustomData = 14;</code>
     * @param \Diadoc\Proto\CustomDataItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\CustomDataItem::class);
        $this->CustomData = $arr;

        return $this;
    }

}

