<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: AcquireCounteragent.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.InvitationDocument</code>
 */
class InvitationDocument extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     */
    private $SignedContent = null;
    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     */
    private $FileName = '';
    /**
     * Generated from protobuf field <code>bool SignatureRequested = 3;</code>
     */
    private $SignatureRequested = false;
    /**
     * Generated from protobuf field <code>string Type = 4;</code>
     */
    private $Type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\Events\SignedContent $SignedContent
     *     @type string $FileName
     *     @type bool $SignatureRequested
     *     @type string $Type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AcquireCounteragent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     * @return \Diadoc\Proto\Events\SignedContent
     */
    public function getSignedContent()
    {
        return $this->SignedContent;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     * @param \Diadoc\Proto\Events\SignedContent $var
     * @return $this
     */
    public function setSignedContent($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Events\SignedContent::class);
        $this->SignedContent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool SignatureRequested = 3;</code>
     * @return bool
     */
    public function getSignatureRequested()
    {
        return $this->SignatureRequested;
    }

    /**
     * Generated from protobuf field <code>bool SignatureRequested = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSignatureRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->SignatureRequested = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Type = 4;</code>
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Generated from protobuf field <code>string Type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

}
