<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.PrepareDocumentsToSignRequest</code>
 */
class PrepareDocumentsToSignRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     */
    private $BoxId = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.DraftDocumentToPatch DraftDocuments = 2;</code>
     */
    private $DraftDocuments;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.DocumentToPatch Documents = 3;</code>
     */
    private $Documents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BoxId
     *     @type \Diadoc\Proto\Events\DraftDocumentToPatch[]|\Google\Protobuf\Internal\RepeatedField $DraftDocuments
     *     @type \Diadoc\Proto\Events\DocumentToPatch[]|\Google\Protobuf\Internal\RepeatedField $Documents
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @return string
     */
    public function getBoxId()
    {
        return $this->BoxId;
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBoxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->BoxId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.DraftDocumentToPatch DraftDocuments = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDraftDocuments()
    {
        return $this->DraftDocuments;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.DraftDocumentToPatch DraftDocuments = 2;</code>
     * @param \Diadoc\Proto\Events\DraftDocumentToPatch[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDraftDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Events\DraftDocumentToPatch::class);
        $this->DraftDocuments = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.DocumentToPatch Documents = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocuments()
    {
        return $this->Documents;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.DocumentToPatch Documents = 3;</code>
     * @param \Diadoc\Proto\Events\DocumentToPatch[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Events\DocumentToPatch::class);
        $this->Documents = $arr;

        return $this;
    }

}
