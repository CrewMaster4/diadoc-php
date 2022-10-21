<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Organization.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Organization</code>
 */
class Organization extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string OrgId = 1;</code>
     */
    private $OrgId = '';
    /**
     * Generated from protobuf field <code>string Inn = 2;</code>
     */
    private $Inn = '';
    /**
     * Generated from protobuf field <code>string Kpp = 3;</code>
     */
    private $Kpp = '';
    /**
     * Generated from protobuf field <code>string FullName = 4;</code>
     */
    private $FullName = '';
    /**
     * Generated from protobuf field <code>string ShortName = 5;</code>
     */
    private $ShortName = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Box Boxes = 7;</code>
     */
    private $Boxes;
    /**
     * Generated from protobuf field <code>string Ogrn = 8;</code>
     */
    private $Ogrn = '';
    /**
     * Generated from protobuf field <code>string FnsParticipantId = 9;</code>
     */
    private $FnsParticipantId = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Address Address = 10;</code>
     */
    private $Address = null;
    /**
     * Generated from protobuf field <code>string FnsRegistrationDate = 11;</code>
     */
    private $FnsRegistrationDate = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Department Departments = 12;</code>
     */
    private $Departments;
    /**
     * Generated from protobuf field <code>string IfnsCode = 13;</code>
     */
    private $IfnsCode = '';
    /**
     * Generated from protobuf field <code>bool IsPilot = 14;</code>
     */
    private $IsPilot = false;
    /**
     * Generated from protobuf field <code>bool IsActive = 15;</code>
     */
    private $IsActive = false;
    /**
     * Generated from protobuf field <code>bool IsTest = 16;</code>
     */
    private $IsTest = false;
    /**
     * Generated from protobuf field <code>bool IsBranch = 17;</code>
     */
    private $IsBranch = false;
    /**
     * Generated from protobuf field <code>bool IsRoaming = 18;</code>
     */
    private $IsRoaming = false;
    /**
     * Generated from protobuf field <code>bool IsEmployee = 19;</code>
     */
    private $IsEmployee = false;
    /**
     * Generated from protobuf field <code>int32 InvitationCount = 20;</code>
     */
    private $InvitationCount = 0;
    /**
     * Generated from protobuf field <code>int32 SearchCount = 21;</code>
     */
    private $SearchCount = 0;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Sociability Sociability = 22;</code>
     */
    private $Sociability = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $OrgId
     *     @type string $Inn
     *     @type string $Kpp
     *     @type string $FullName
     *     @type string $ShortName
     *     @type \Diadoc\Proto\Box[]|\Google\Protobuf\Internal\RepeatedField $Boxes
     *     @type string $Ogrn
     *     @type string $FnsParticipantId
     *     @type \Diadoc\Proto\Address $Address
     *     @type string $FnsRegistrationDate
     *     @type \Diadoc\Proto\Department[]|\Google\Protobuf\Internal\RepeatedField $Departments
     *     @type string $IfnsCode
     *     @type bool $IsPilot
     *     @type bool $IsActive
     *     @type bool $IsTest
     *     @type bool $IsBranch
     *     @type bool $IsRoaming
     *     @type bool $IsEmployee
     *     @type int $InvitationCount
     *     @type int $SearchCount
     *     @type int $Sociability
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Organization::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string OrgId = 1;</code>
     * @return string
     */
    public function getOrgId()
    {
        return $this->OrgId;
    }

    /**
     * Generated from protobuf field <code>string OrgId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->OrgId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Inn = 2;</code>
     * @return string
     */
    public function getInn()
    {
        return $this->Inn;
    }

    /**
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
     * Generated from protobuf field <code>string Kpp = 3;</code>
     * @return string
     */
    public function getKpp()
    {
        return $this->Kpp;
    }

    /**
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
     * Generated from protobuf field <code>string FullName = 4;</code>
     * @return string
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * Generated from protobuf field <code>string FullName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFullName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FullName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ShortName = 5;</code>
     * @return string
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * Generated from protobuf field <code>string ShortName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setShortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->ShortName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Box Boxes = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBoxes()
    {
        return $this->Boxes;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Box Boxes = 7;</code>
     * @param \Diadoc\Proto\Box[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBoxes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Box::class);
        $this->Boxes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Ogrn = 8;</code>
     * @return string
     */
    public function getOgrn()
    {
        return $this->Ogrn;
    }

    /**
     * Generated from protobuf field <code>string Ogrn = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setOgrn($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ogrn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FnsParticipantId = 9;</code>
     * @return string
     */
    public function getFnsParticipantId()
    {
        return $this->FnsParticipantId;
    }

    /**
     * Generated from protobuf field <code>string FnsParticipantId = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setFnsParticipantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->FnsParticipantId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Address Address = 10;</code>
     * @return \Diadoc\Proto\Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Address Address = 10;</code>
     * @param \Diadoc\Proto\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Address::class);
        $this->Address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FnsRegistrationDate = 11;</code>
     * @return string
     */
    public function getFnsRegistrationDate()
    {
        return $this->FnsRegistrationDate;
    }

    /**
     * Generated from protobuf field <code>string FnsRegistrationDate = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setFnsRegistrationDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->FnsRegistrationDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Department Departments = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDepartments()
    {
        return $this->Departments;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Department Departments = 12;</code>
     * @param \Diadoc\Proto\Department[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDepartments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Department::class);
        $this->Departments = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string IfnsCode = 13;</code>
     * @return string
     */
    public function getIfnsCode()
    {
        return $this->IfnsCode;
    }

    /**
     * Generated from protobuf field <code>string IfnsCode = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setIfnsCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->IfnsCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsPilot = 14;</code>
     * @return bool
     */
    public function getIsPilot()
    {
        return $this->IsPilot;
    }

    /**
     * Generated from protobuf field <code>bool IsPilot = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPilot($var)
    {
        GPBUtil::checkBool($var);
        $this->IsPilot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsActive = 15;</code>
     * @return bool
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Generated from protobuf field <code>bool IsActive = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsActive($var)
    {
        GPBUtil::checkBool($var);
        $this->IsActive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsTest = 16;</code>
     * @return bool
     */
    public function getIsTest()
    {
        return $this->IsTest;
    }

    /**
     * Generated from protobuf field <code>bool IsTest = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsTest($var)
    {
        GPBUtil::checkBool($var);
        $this->IsTest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsBranch = 17;</code>
     * @return bool
     */
    public function getIsBranch()
    {
        return $this->IsBranch;
    }

    /**
     * Generated from protobuf field <code>bool IsBranch = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsBranch($var)
    {
        GPBUtil::checkBool($var);
        $this->IsBranch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsRoaming = 18;</code>
     * @return bool
     */
    public function getIsRoaming()
    {
        return $this->IsRoaming;
    }

    /**
     * Generated from protobuf field <code>bool IsRoaming = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRoaming($var)
    {
        GPBUtil::checkBool($var);
        $this->IsRoaming = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsEmployee = 19;</code>
     * @return bool
     */
    public function getIsEmployee()
    {
        return $this->IsEmployee;
    }

    /**
     * Generated from protobuf field <code>bool IsEmployee = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEmployee($var)
    {
        GPBUtil::checkBool($var);
        $this->IsEmployee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 InvitationCount = 20;</code>
     * @return int
     */
    public function getInvitationCount()
    {
        return $this->InvitationCount;
    }

    /**
     * Generated from protobuf field <code>int32 InvitationCount = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setInvitationCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->InvitationCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 SearchCount = 21;</code>
     * @return int
     */
    public function getSearchCount()
    {
        return $this->SearchCount;
    }

    /**
     * Generated from protobuf field <code>int32 SearchCount = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setSearchCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->SearchCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Sociability Sociability = 22;</code>
     * @return int
     */
    public function getSociability()
    {
        return $this->Sociability;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Sociability Sociability = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setSociability($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Sociability::class);
        $this->Sociability = $var;

        return $this;
    }

}
