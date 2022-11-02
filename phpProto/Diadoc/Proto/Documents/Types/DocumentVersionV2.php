<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/Types/DocumentTypeDescriptionV2.proto

namespace Diadoc\Proto\Documents\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Documents.Types.DocumentVersionV2</code>
 */
class DocumentVersionV2 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Version = 1;</code>
     */
    protected $Version = '';
    /**
     * Generated from protobuf field <code>bool SupportsContentPatching = 2;</code>
     */
    protected $SupportsContentPatching = false;
    /**
     * Generated from protobuf field <code>bool SupportsEncrypting = 3;</code>
     */
    protected $SupportsEncrypting = false;
    /**
     * Generated from protobuf field <code>bool SupportsPredefinedRecipientTitle = 7;</code>
     */
    protected $SupportsPredefinedRecipientTitle = false;
    /**
     * Generated from protobuf field <code>bool SupportsAmendmentRequest = 8;</code>
     */
    protected $SupportsAmendmentRequest = false;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentTitleV2 Titles = 4;</code>
     */
    private $Titles;
    /**
     * Generated from protobuf field <code>bool IsActual = 5;</code>
     */
    protected $IsActual = false;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentWorkflowV2 Workflows = 6;</code>
     */
    private $Workflows;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Version
     *     @type bool $SupportsContentPatching
     *     @type bool $SupportsEncrypting
     *     @type bool $SupportsPredefinedRecipientTitle
     *     @type bool $SupportsAmendmentRequest
     *     @type \Diadoc\Proto\Documents\Types\DocumentTitleV2[]|\Google\Protobuf\Internal\RepeatedField $Titles
     *     @type bool $IsActual
     *     @type \Diadoc\Proto\Documents\Types\DocumentWorkflowV2[]|\Google\Protobuf\Internal\RepeatedField $Workflows
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\Types\DocumentTypeDescriptionV2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * Generated from protobuf field <code>string Version = 1;</code>
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
     * Generated from protobuf field <code>bool SupportsContentPatching = 2;</code>
     * @return bool
     */
    public function getSupportsContentPatching()
    {
        return $this->SupportsContentPatching;
    }

    /**
     * Generated from protobuf field <code>bool SupportsContentPatching = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsContentPatching($var)
    {
        GPBUtil::checkBool($var);
        $this->SupportsContentPatching = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool SupportsEncrypting = 3;</code>
     * @return bool
     */
    public function getSupportsEncrypting()
    {
        return $this->SupportsEncrypting;
    }

    /**
     * Generated from protobuf field <code>bool SupportsEncrypting = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsEncrypting($var)
    {
        GPBUtil::checkBool($var);
        $this->SupportsEncrypting = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool SupportsPredefinedRecipientTitle = 7;</code>
     * @return bool
     */
    public function getSupportsPredefinedRecipientTitle()
    {
        return $this->SupportsPredefinedRecipientTitle;
    }

    /**
     * Generated from protobuf field <code>bool SupportsPredefinedRecipientTitle = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsPredefinedRecipientTitle($var)
    {
        GPBUtil::checkBool($var);
        $this->SupportsPredefinedRecipientTitle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool SupportsAmendmentRequest = 8;</code>
     * @return bool
     */
    public function getSupportsAmendmentRequest()
    {
        return $this->SupportsAmendmentRequest;
    }

    /**
     * Generated from protobuf field <code>bool SupportsAmendmentRequest = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsAmendmentRequest($var)
    {
        GPBUtil::checkBool($var);
        $this->SupportsAmendmentRequest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentTitleV2 Titles = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTitles()
    {
        return $this->Titles;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentTitleV2 Titles = 4;</code>
     * @param \Diadoc\Proto\Documents\Types\DocumentTitleV2[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTitles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Documents\Types\DocumentTitleV2::class);
        $this->Titles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsActual = 5;</code>
     * @return bool
     */
    public function getIsActual()
    {
        return $this->IsActual;
    }

    /**
     * Generated from protobuf field <code>bool IsActual = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsActual($var)
    {
        GPBUtil::checkBool($var);
        $this->IsActual = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentWorkflowV2 Workflows = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkflows()
    {
        return $this->Workflows;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentWorkflowV2 Workflows = 6;</code>
     * @param \Diadoc\Proto\Documents\Types\DocumentWorkflowV2[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkflows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Documents\Types\DocumentWorkflowV2::class);
        $this->Workflows = $arr;

        return $this;
    }

}
