<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/BilateralDocument.proto

namespace Diadoc\Proto\Documents\BilateralDocument;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Documents.BilateralDocument.TrustConnectionRequestMetadata</code>
 */
class TrustConnectionRequestMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.BilateralDocument.BilateralDocumentStatus TrustConnectionRequestStatus = 1;</code>
     */
    private $TrustConnectionRequestStatus = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $TrustConnectionRequestStatus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\BilateralDocument::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.BilateralDocument.BilateralDocumentStatus TrustConnectionRequestStatus = 1;</code>
     * @return int
     */
    public function getTrustConnectionRequestStatus()
    {
        return $this->TrustConnectionRequestStatus;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.BilateralDocument.BilateralDocumentStatus TrustConnectionRequestStatus = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTrustConnectionRequestStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Documents\BilateralDocument\BilateralDocumentStatus::class);
        $this->TrustConnectionRequestStatus = $var;

        return $this;
    }

}

