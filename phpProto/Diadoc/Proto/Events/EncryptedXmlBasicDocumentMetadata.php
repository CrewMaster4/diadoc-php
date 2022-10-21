<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.EncryptedXmlBasicDocumentMetadata</code>
 */
class EncryptedXmlBasicDocumentMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string FormationDate = 1;</code>
     */
    private $FormationDate = '';
    /**
     * Generated from protobuf field <code>string FormationTime = 2;</code>
     */
    private $FormationTime = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $FormationDate
     *     @type string $FormationTime
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string FormationDate = 1;</code>
     * @return string
     */
    public function getFormationDate()
    {
        return $this->FormationDate;
    }

    /**
     * Generated from protobuf field <code>string FormationDate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormationDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->FormationDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FormationTime = 2;</code>
     * @return string
     */
    public function getFormationTime()
    {
        return $this->FormationTime;
    }

    /**
     * Generated from protobuf field <code>string FormationTime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFormationTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->FormationTime = $var;

        return $this;
    }

}
