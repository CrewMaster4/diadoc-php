<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.SignedContent</code>
 */
class SignedContent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes Content = 1;</code>
     */
    protected $Content = '';
    /**
     * Generated from protobuf field <code>bytes Signature = 2;</code>
     */
    protected $Signature = '';
    /**
     * Generated from protobuf field <code>string NameOnShelf = 4;</code>
     */
    protected $NameOnShelf = '';
    /**
     * Generated from protobuf field <code>bool SignWithTestSignature = 5;</code>
     */
    protected $SignWithTestSignature = false;
    /**
     * Generated from protobuf field <code>string SignatureNameOnShelf = 6;</code>
     */
    protected $SignatureNameOnShelf = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Content
     *     @type string $Signature
     *     @type string $NameOnShelf
     *     @type bool $SignWithTestSignature
     *     @type string $SignatureNameOnShelf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes Content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * Generated from protobuf field <code>bytes Content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->Content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes Signature = 2;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * Generated from protobuf field <code>bytes Signature = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->Signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string NameOnShelf = 4;</code>
     * @return string
     */
    public function getNameOnShelf()
    {
        return $this->NameOnShelf;
    }

    /**
     * Generated from protobuf field <code>string NameOnShelf = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNameOnShelf($var)
    {
        GPBUtil::checkString($var, True);
        $this->NameOnShelf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool SignWithTestSignature = 5;</code>
     * @return bool
     */
    public function getSignWithTestSignature()
    {
        return $this->SignWithTestSignature;
    }

    /**
     * Generated from protobuf field <code>bool SignWithTestSignature = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSignWithTestSignature($var)
    {
        GPBUtil::checkBool($var);
        $this->SignWithTestSignature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string SignatureNameOnShelf = 6;</code>
     * @return string
     */
    public function getSignatureNameOnShelf()
    {
        return $this->SignatureNameOnShelf;
    }

    /**
     * Generated from protobuf field <code>string SignatureNameOnShelf = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSignatureNameOnShelf($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignatureNameOnShelf = $var;

        return $this;
    }

}

