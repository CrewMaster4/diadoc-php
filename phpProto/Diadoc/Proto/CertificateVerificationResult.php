<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignatureVerificationResult.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.CertificateVerificationResult</code>
 */
class CertificateVerificationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool IsValid = 2;</code>
     */
    protected $IsValid = false;
    /**
     * first element corresponds to signer certificate
     *
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CertificateChainElement CertificateChain = 3;</code>
     */
    private $CertificateChain;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp VerificationTime = 4;</code>
     */
    protected $VerificationTime = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsValid
     *     @type \Diadoc\Proto\CertificateChainElement[]|\Google\Protobuf\Internal\RepeatedField $CertificateChain
     *           first element corresponds to signer certificate
     *     @type \Diadoc\Proto\Timestamp $VerificationTime
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SignatureVerificationResult::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool IsValid = 2;</code>
     * @return bool
     */
    public function getIsValid()
    {
        return $this->IsValid;
    }

    /**
     * Generated from protobuf field <code>bool IsValid = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsValid($var)
    {
        GPBUtil::checkBool($var);
        $this->IsValid = $var;

        return $this;
    }

    /**
     * first element corresponds to signer certificate
     *
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CertificateChainElement CertificateChain = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCertificateChain()
    {
        return $this->CertificateChain;
    }

    /**
     * first element corresponds to signer certificate
     *
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CertificateChainElement CertificateChain = 3;</code>
     * @param \Diadoc\Proto\CertificateChainElement[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCertificateChain($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\CertificateChainElement::class);
        $this->CertificateChain = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp VerificationTime = 4;</code>
     * @return \Diadoc\Proto\Timestamp
     */
    public function getVerificationTime()
    {
        return $this->VerificationTime;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp VerificationTime = 4;</code>
     * @param \Diadoc\Proto\Timestamp $var
     * @return $this
     */
    public function setVerificationTime($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Timestamp::class);
        $this->VerificationTime = $var;

        return $this;
    }

}

