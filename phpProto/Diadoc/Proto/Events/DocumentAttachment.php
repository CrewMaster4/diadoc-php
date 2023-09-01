<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.DocumentAttachment</code>
 */
class DocumentAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     */
    private $SignedContent = null;
    /**
     * Generated from protobuf field <code>string Comment = 3;</code>
     */
    private $Comment = '';
    /**
     * Generated from protobuf field <code>bool NeedRecipientSignature = 4;</code>
     */
    private $NeedRecipientSignature = false;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId InitialDocumentIds = 5;</code>
     */
    private $InitialDocumentIds;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId SubordinateDocumentIds = 6;</code>
     */
    private $SubordinateDocumentIds;
    /**
     * reserved 7 for DocumentDate
     * reserved 8 for DocumentNumber
     *
     * Generated from protobuf field <code>string CustomDocumentId = 9;</code>
     */
    private $CustomDocumentId = '';
    /**
     * Generated from protobuf field <code>bool NeedReceipt = 10;</code>
     */
    private $NeedReceipt = false;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CustomDataItem CustomData = 11;</code>
     */
    private $CustomData;
    /**
     * Generated from protobuf field <code>string TypeNamedId = 12;</code>
     */
    private $TypeNamedId = '';
    /**
     * Generated from protobuf field <code>string Function = 13;</code>
     */
    private $Function = '';
    /**
     * Generated from protobuf field <code>string Version = 14;</code>
     */
    private $Version = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.MetadataItem Metadata = 15;</code>
     */
    private $Metadata;
    /**
     * Generated from protobuf field <code>int32 WorkflowId = 16;</code>
     */
    private $WorkflowId = 0;
    /**
     * Generated from protobuf field <code>bool IsEncrypted = 17;</code>
     */
    private $IsEncrypted = false;
    /**
     * Generated from protobuf field <code>string EditingSettingId = 18;</code>
     */
    private $EditingSettingId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\Events\SignedContent $SignedContent
     *     @type string $Comment
     *     @type bool $NeedRecipientSignature
     *     @type \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $InitialDocumentIds
     *     @type \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $SubordinateDocumentIds
     *     @type string $CustomDocumentId
     *           reserved 7 for DocumentDate
     *           reserved 8 for DocumentNumber
     *     @type bool $NeedReceipt
     *     @type \Diadoc\Proto\CustomDataItem[]|\Google\Protobuf\Internal\RepeatedField $CustomData
     *     @type string $TypeNamedId
     *     @type string $Function
     *     @type string $Version
     *     @type \Diadoc\Proto\Events\MetadataItem[]|\Google\Protobuf\Internal\RepeatedField $Metadata
     *     @type int $WorkflowId
     *     @type bool $IsEncrypted
     *     @type string $EditingSettingId
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
     * Generated from protobuf field <code>bool NeedRecipientSignature = 4;</code>
     * @return bool
     */
    public function getNeedRecipientSignature()
    {
        return $this->NeedRecipientSignature;
    }

    /**
     * Generated from protobuf field <code>bool NeedRecipientSignature = 4;</code>
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
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId InitialDocumentIds = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInitialDocumentIds()
    {
        return $this->InitialDocumentIds;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId InitialDocumentIds = 5;</code>
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
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId SubordinateDocumentIds = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubordinateDocumentIds()
    {
        return $this->SubordinateDocumentIds;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId SubordinateDocumentIds = 6;</code>
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
     * reserved 7 for DocumentDate
     * reserved 8 for DocumentNumber
     *
     * Generated from protobuf field <code>string CustomDocumentId = 9;</code>
     * @return string
     */
    public function getCustomDocumentId()
    {
        return $this->CustomDocumentId;
    }

    /**
     * reserved 7 for DocumentDate
     * reserved 8 for DocumentNumber
     *
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
     * Generated from protobuf field <code>bool NeedReceipt = 10;</code>
     * @return bool
     */
    public function getNeedReceipt()
    {
        return $this->NeedReceipt;
    }

    /**
     * Generated from protobuf field <code>bool NeedReceipt = 10;</code>
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
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CustomDataItem CustomData = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomData()
    {
        return $this->CustomData;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CustomDataItem CustomData = 11;</code>
     * @param \Diadoc\Proto\CustomDataItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\CustomDataItem::class);
        $this->CustomData = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TypeNamedId = 12;</code>
     * @return string
     */
    public function getTypeNamedId()
    {
        return $this->TypeNamedId;
    }

    /**
     * Generated from protobuf field <code>string TypeNamedId = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeNamedId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TypeNamedId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Function = 13;</code>
     * @return string
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * Generated from protobuf field <code>string Function = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->Function = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Version = 14;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * Generated from protobuf field <code>string Version = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.MetadataItem Metadata = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadata()
    {
        return $this->Metadata;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.MetadataItem Metadata = 15;</code>
     * @param \Diadoc\Proto\Events\MetadataItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Events\MetadataItem::class);
        $this->Metadata = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 WorkflowId = 16;</code>
     * @return int
     */
    public function getWorkflowId()
    {
        return $this->WorkflowId;
    }

    /**
     * Generated from protobuf field <code>int32 WorkflowId = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->WorkflowId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsEncrypted = 17;</code>
     * @return bool
     */
    public function getIsEncrypted()
    {
        return $this->IsEncrypted;
    }

    /**
     * Generated from protobuf field <code>bool IsEncrypted = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEncrypted($var)
    {
        GPBUtil::checkBool($var);
        $this->IsEncrypted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EditingSettingId = 18;</code>
     * @return string
     */
    public function getEditingSettingId()
    {
        return $this->EditingSettingId;
    }

    /**
     * Generated from protobuf field <code>string EditingSettingId = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setEditingSettingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->EditingSettingId = $var;

        return $this;
    }

}

