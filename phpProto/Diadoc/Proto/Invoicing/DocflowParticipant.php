<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/OrganizationInfo.proto

namespace Diadoc\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Invoicing.DocflowParticipant</code>
 */
class DocflowParticipant extends \Google\Protobuf\Internal\Message
{
    /**
     * идентификатор ящика в Диадоке
     *
     * Generated from protobuf field <code>string BoxId = 1;</code>
     */
    protected $BoxId = '';
    /**
     * ИНН организации-участника обмена
     *
     * Generated from protobuf field <code>string Inn = 2;</code>
     */
    protected $Inn = '';
    /**
     * КПП организации-участника обмена
     *
     * Generated from protobuf field <code>string Kpp = 3;</code>
     */
    protected $Kpp = '';
    /**
     * идентификатор участника ЭДО
     *
     * Generated from protobuf field <code>string FnsParticipantId = 4;</code>
     */
    protected $FnsParticipantId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BoxId
     *           идентификатор ящика в Диадоке
     *     @type string $Inn
     *           ИНН организации-участника обмена
     *     @type string $Kpp
     *           КПП организации-участника обмена
     *     @type string $FnsParticipantId
     *           идентификатор участника ЭДО
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\OrganizationInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * идентификатор ящика в Диадоке
     *
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @return string
     */
    public function getBoxId()
    {
        return $this->BoxId;
    }

    /**
     * идентификатор ящика в Диадоке
     *
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBoxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->BoxId = $var;

        return $this;
    }

    /**
     * ИНН организации-участника обмена
     *
     * Generated from protobuf field <code>string Inn = 2;</code>
     * @return string
     */
    public function getInn()
    {
        return $this->Inn;
    }

    /**
     * ИНН организации-участника обмена
     *
     * Generated from protobuf field <code>string Inn = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInn($var)
    {
        GPBUtil::checkString($var, True);
        $this->Inn = $var;

        return $this;
    }

    /**
     * КПП организации-участника обмена
     *
     * Generated from protobuf field <code>string Kpp = 3;</code>
     * @return string
     */
    public function getKpp()
    {
        return $this->Kpp;
    }

    /**
     * КПП организации-участника обмена
     *
     * Generated from protobuf field <code>string Kpp = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKpp($var)
    {
        GPBUtil::checkString($var, True);
        $this->Kpp = $var;

        return $this;
    }

    /**
     * идентификатор участника ЭДО
     *
     * Generated from protobuf field <code>string FnsParticipantId = 4;</code>
     * @return string
     */
    public function getFnsParticipantId()
    {
        return $this->FnsParticipantId;
    }

    /**
     * идентификатор участника ЭДО
     *
     * Generated from protobuf field <code>string FnsParticipantId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFnsParticipantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->FnsParticipantId = $var;

        return $this;
    }

}

