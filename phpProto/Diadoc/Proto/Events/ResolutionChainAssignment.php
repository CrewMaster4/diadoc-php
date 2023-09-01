<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.ResolutionChainAssignment</code>
 */
class ResolutionChainAssignment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string InitialDocumentId = 1;</code>
     */
    protected $InitialDocumentId = '';
    /**
     * Generated from protobuf field <code>string ChainId = 2;</code>
     */
    protected $ChainId = '';
    /**
     * Generated from protobuf field <code>string Comment = 3;</code>
     */
    protected $Comment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $InitialDocumentId
     *     @type string $ChainId
     *     @type string $Comment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string InitialDocumentId = 1;</code>
     * @return string
     */
    public function getInitialDocumentId()
    {
        return $this->InitialDocumentId;
    }

    /**
     * Generated from protobuf field <code>string InitialDocumentId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInitialDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->InitialDocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ChainId = 2;</code>
     * @return string
     */
    public function getChainId()
    {
        return $this->ChainId;
    }

    /**
     * Generated from protobuf field <code>string ChainId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChainId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ChainId = $var;

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

}

