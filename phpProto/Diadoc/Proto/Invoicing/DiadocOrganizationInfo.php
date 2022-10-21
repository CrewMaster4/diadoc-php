<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/OrganizationInfo.proto

namespace Diadoc\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Invoicing.DiadocOrganizationInfo</code>
 */
class DiadocOrganizationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * идентификатор ящика в Диадоке
     *
     * Generated from protobuf field <code>string BoxId = 1;</code>
     */
    private $BoxId = '';
    /**
     * реквизиты организации
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.OrganizationInfo OrgInfo = 2;</code>
     */
    private $OrgInfo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BoxId
     *           идентификатор ящика в Диадоке
     *     @type \Diadoc\Proto\Invoicing\OrganizationInfo $OrgInfo
     *           реквизиты организации
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
     * реквизиты организации
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.OrganizationInfo OrgInfo = 2;</code>
     * @return \Diadoc\Proto\Invoicing\OrganizationInfo
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }

    /**
     * реквизиты организации
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.OrganizationInfo OrgInfo = 2;</code>
     * @param \Diadoc\Proto\Invoicing\OrganizationInfo $var
     * @return $this
     */
    public function setOrgInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Invoicing\OrganizationInfo::class);
        $this->OrgInfo = $var;

        return $this;
    }

}
