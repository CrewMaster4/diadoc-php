<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.CustomDataPatch</code>
 */
class CustomDataPatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     */
    private $ParentEntityId = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.CustomDataPatchOperation Operation = 2;</code>
     */
    private $Operation = 0;
    /**
     * Generated from protobuf field <code>string Key = 3;</code>
     */
    private $Key = '';
    /**
     * Generated from protobuf field <code>string Value = 4;</code>
     */
    private $Value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ParentEntityId
     *     @type int $Operation
     *     @type string $Key
     *     @type string $Value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     * @return string
     */
    public function getParentEntityId()
    {
        return $this->ParentEntityId;
    }

    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParentEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ParentEntityId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.CustomDataPatchOperation Operation = 2;</code>
     * @return int
     */
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.CustomDataPatchOperation Operation = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Events\CustomDataPatchOperation::class);
        $this->Operation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Key = 3;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * Generated from protobuf field <code>string Key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->Key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Value = 4;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Generated from protobuf field <code>string Value = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->Value = $var;

        return $this;
    }

}
