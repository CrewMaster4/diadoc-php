<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.DocumentPatchedContent</code>
 */
class DocumentPatchedContent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.DocumentId DocumentId = 1;</code>
     */
    private $DocumentId = null;
    /**
     * Generated from protobuf field <code>string PatchedContentId = 2;</code>
     */
    private $PatchedContentId = '';
    /**
     * Generated from protobuf field <code>bytes Content = 3;</code>
     */
    private $Content = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\DocumentId $DocumentId
     *     @type string $PatchedContentId
     *     @type string $Content
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.DocumentId DocumentId = 1;</code>
     * @return \Diadoc\Proto\DocumentId
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.DocumentId DocumentId = 1;</code>
     * @param \Diadoc\Proto\DocumentId $var
     * @return $this
     */
    public function setDocumentId($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\DocumentId::class);
        $this->DocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PatchedContentId = 2;</code>
     * @return string
     */
    public function getPatchedContentId()
    {
        return $this->PatchedContentId;
    }

    /**
     * Generated from protobuf field <code>string PatchedContentId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPatchedContentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->PatchedContentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes Content = 3;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * Generated from protobuf field <code>bytes Content = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->Content = $var;

        return $this;
    }

}

