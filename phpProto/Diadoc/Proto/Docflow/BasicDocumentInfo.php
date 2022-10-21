<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocumentInfo.proto

namespace Diadoc\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Docflow.BasicDocumentInfo</code>
 */
class BasicDocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Total = 1;</code>
     */
    private $Total = '';
    /**
     * Generated from protobuf field <code>bool NoVat = 2;</code>
     */
    private $NoVat = false;
    /**
     * Generated from protobuf field <code>string Vat = 3;</code>
     */
    private $Vat = '';
    /**
     * Generated from protobuf field <code>string Grounds = 4;</code>
     */
    private $Grounds = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Total
     *     @type bool $NoVat
     *     @type string $Vat
     *     @type string $Grounds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Total = 1;</code>
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Generated from protobuf field <code>string Total = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->Total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool NoVat = 2;</code>
     * @return bool
     */
    public function getNoVat()
    {
        return $this->NoVat;
    }

    /**
     * Generated from protobuf field <code>bool NoVat = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoVat($var)
    {
        GPBUtil::checkBool($var);
        $this->NoVat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Vat = 3;</code>
     * @return string
     */
    public function getVat()
    {
        return $this->Vat;
    }

    /**
     * Generated from protobuf field <code>string Vat = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Grounds = 4;</code>
     * @return string
     */
    public function getGrounds()
    {
        return $this->Grounds;
    }

    /**
     * Generated from protobuf field <code>string Grounds = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGrounds($var)
    {
        GPBUtil::checkString($var, True);
        $this->Grounds = $var;

        return $this;
    }

}
