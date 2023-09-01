<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Forwarding/ForwardingApi.proto

namespace Diadoc\Proto\Forwarding;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Forwarding.ForwardedDocumentEvent</code>
 */
class ForwardedDocumentEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp Timestamp = 1;</code>
     */
    private $Timestamp = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Forwarding.ForwardedDocumentId ForwardedDocumentId = 2;</code>
     */
    private $ForwardedDocumentId = null;
    /**
     * Generated from protobuf field <code>bytes IndexKey = 3;</code>
     */
    private $IndexKey = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Forwarding.ForwardedDocument ForwardedDocument = 4;</code>
     */
    private $ForwardedDocument = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\Timestamp $Timestamp
     *     @type \Diadoc\Proto\Forwarding\ForwardedDocumentId $ForwardedDocumentId
     *     @type string $IndexKey
     *     @type \Diadoc\Proto\Forwarding\ForwardedDocument $ForwardedDocument
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Forwarding\ForwardingApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp Timestamp = 1;</code>
     * @return \Diadoc\Proto\Timestamp
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp Timestamp = 1;</code>
     * @param \Diadoc\Proto\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Timestamp::class);
        $this->Timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Forwarding.ForwardedDocumentId ForwardedDocumentId = 2;</code>
     * @return \Diadoc\Proto\Forwarding\ForwardedDocumentId
     */
    public function getForwardedDocumentId()
    {
        return $this->ForwardedDocumentId;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Forwarding.ForwardedDocumentId ForwardedDocumentId = 2;</code>
     * @param \Diadoc\Proto\Forwarding\ForwardedDocumentId $var
     * @return $this
     */
    public function setForwardedDocumentId($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Forwarding\ForwardedDocumentId::class);
        $this->ForwardedDocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes IndexKey = 3;</code>
     * @return string
     */
    public function getIndexKey()
    {
        return $this->IndexKey;
    }

    /**
     * Generated from protobuf field <code>bytes IndexKey = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->IndexKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Forwarding.ForwardedDocument ForwardedDocument = 4;</code>
     * @return \Diadoc\Proto\Forwarding\ForwardedDocument
     */
    public function getForwardedDocument()
    {
        return $this->ForwardedDocument;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Forwarding.ForwardedDocument ForwardedDocument = 4;</code>
     * @param \Diadoc\Proto\Forwarding\ForwardedDocument $var
     * @return $this
     */
    public function setForwardedDocument($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Forwarding\ForwardedDocument::class);
        $this->ForwardedDocument = $var;

        return $this;
    }

}

