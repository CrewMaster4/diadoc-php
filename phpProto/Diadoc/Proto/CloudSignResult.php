<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CloudSign.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.CloudSignResult</code>
 */
class CloudSignResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Token = 1;</code>
     */
    protected $Token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CloudSign::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Token = 1;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * Generated from protobuf field <code>string Token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->Token = $var;

        return $this;
    }

}

