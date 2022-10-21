<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RoamingNotification.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.RoamingNotification</code>
 */
class RoamingNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool Success = 1;</code>
     */
    private $Success = false;
    /**
     * Generated from protobuf field <code>string Description = 2;</code>
     */
    private $Description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $Success
     *     @type string $Description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RoamingNotification::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool Success = 1;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * Generated from protobuf field <code>bool Success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->Success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Generated from protobuf field <code>string Description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->Description = $var;

        return $this;
    }

}
