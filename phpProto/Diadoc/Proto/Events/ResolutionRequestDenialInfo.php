<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/ResolutionRequestDenialInfo.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.ResolutionRequestDenialInfo</code>
 */
class ResolutionRequestDenialInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Author = 1;</code>
     */
    private $Author = '';
    /**
     * Generated from protobuf field <code>string InitialRequestId = 2;</code>
     */
    private $InitialRequestId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Author
     *     @type string $InitialRequestId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\ResolutionRequestDenialInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Author = 1;</code>
     * @return string
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * Generated from protobuf field <code>string Author = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthor($var)
    {
        GPBUtil::checkString($var, True);
        $this->Author = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string InitialRequestId = 2;</code>
     * @return string
     */
    public function getInitialRequestId()
    {
        return $this->InitialRequestId;
    }

    /**
     * Generated from protobuf field <code>string InitialRequestId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInitialRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->InitialRequestId = $var;

        return $this;
    }

}

