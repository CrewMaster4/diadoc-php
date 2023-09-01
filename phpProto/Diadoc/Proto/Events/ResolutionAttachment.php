<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.ResolutionAttachment</code>
 */
class ResolutionAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string InitialDocumentId = 1;</code>
     */
    protected $InitialDocumentId = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionType ResolutionType = 2;</code>
     */
    protected $ResolutionType = 0;
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
     *     @type int $ResolutionType
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
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionType ResolutionType = 2;</code>
     * @return int
     */
    public function getResolutionType()
    {
        return $this->ResolutionType;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionType ResolutionType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResolutionType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Events\ResolutionType::class);
        $this->ResolutionType = $var;

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

