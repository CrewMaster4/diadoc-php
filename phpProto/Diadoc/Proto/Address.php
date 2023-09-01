<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Address.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.RussianAddress RussianAddress = 1;</code>
     */
    protected $RussianAddress = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.ForeignAddress ForeignAddress = 2;</code>
     */
    protected $ForeignAddress = null;
    /**
     * Generated from protobuf field <code>string AddressCode = 3;</code>
     */
    protected $AddressCode = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\RussianAddress $RussianAddress
     *     @type \Diadoc\Proto\ForeignAddress $ForeignAddress
     *     @type string $AddressCode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Address::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.RussianAddress RussianAddress = 1;</code>
     * @return \Diadoc\Proto\RussianAddress
     */
    public function getRussianAddress()
    {
        return $this->RussianAddress;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.RussianAddress RussianAddress = 1;</code>
     * @param \Diadoc\Proto\RussianAddress $var
     * @return $this
     */
    public function setRussianAddress($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\RussianAddress::class);
        $this->RussianAddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.ForeignAddress ForeignAddress = 2;</code>
     * @return \Diadoc\Proto\ForeignAddress
     */
    public function getForeignAddress()
    {
        return $this->ForeignAddress;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.ForeignAddress ForeignAddress = 2;</code>
     * @param \Diadoc\Proto\ForeignAddress $var
     * @return $this
     */
    public function setForeignAddress($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\ForeignAddress::class);
        $this->ForeignAddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AddressCode = 3;</code>
     * @return string
     */
    public function getAddressCode()
    {
        return $this->AddressCode;
    }

    /**
     * Generated from protobuf field <code>string AddressCode = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->AddressCode = $var;

        return $this;
    }

}

