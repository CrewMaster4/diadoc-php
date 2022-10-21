<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: OrganizationUserPermissions.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.OrganizationUserPermissions</code>
 */
class OrganizationUserPermissions extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string UserDepartmentId = 1;</code>
     */
    private $UserDepartmentId = '';
    /**
     * Generated from protobuf field <code>bool IsAdministrator = 2;</code>
     */
    private $IsAdministrator = false;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.DocumentAccessLevel DocumentAccessLevel = 3;</code>
     */
    private $DocumentAccessLevel = 0;
    /**
     * Generated from protobuf field <code>bool CanSignDocuments = 4;</code>
     */
    private $CanSignDocuments = false;
    /**
     * Generated from protobuf field <code>bool CanAddResolutions = 7;</code>
     */
    private $CanAddResolutions = false;
    /**
     * Generated from protobuf field <code>bool CanRequestResolutions = 8;</code>
     */
    private $CanRequestResolutions = false;
    /**
     * Generated from protobuf field <code>repeated string SelectedDepartmentIds = 9;</code>
     */
    private $SelectedDepartmentIds;
    /**
     * Generated from protobuf field <code>string JobTitle = 10;</code>
     */
    private $JobTitle = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $UserDepartmentId
     *     @type bool $IsAdministrator
     *     @type int $DocumentAccessLevel
     *     @type bool $CanSignDocuments
     *     @type bool $CanAddResolutions
     *     @type bool $CanRequestResolutions
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $SelectedDepartmentIds
     *     @type string $JobTitle
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\OrganizationUserPermissions::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string UserDepartmentId = 1;</code>
     * @return string
     */
    public function getUserDepartmentId()
    {
        return $this->UserDepartmentId;
    }

    /**
     * Generated from protobuf field <code>string UserDepartmentId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserDepartmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->UserDepartmentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsAdministrator = 2;</code>
     * @return bool
     */
    public function getIsAdministrator()
    {
        return $this->IsAdministrator;
    }

    /**
     * Generated from protobuf field <code>bool IsAdministrator = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAdministrator($var)
    {
        GPBUtil::checkBool($var);
        $this->IsAdministrator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.DocumentAccessLevel DocumentAccessLevel = 3;</code>
     * @return int
     */
    public function getDocumentAccessLevel()
    {
        return $this->DocumentAccessLevel;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.DocumentAccessLevel DocumentAccessLevel = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDocumentAccessLevel($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\DocumentAccessLevel::class);
        $this->DocumentAccessLevel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool CanSignDocuments = 4;</code>
     * @return bool
     */
    public function getCanSignDocuments()
    {
        return $this->CanSignDocuments;
    }

    /**
     * Generated from protobuf field <code>bool CanSignDocuments = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanSignDocuments($var)
    {
        GPBUtil::checkBool($var);
        $this->CanSignDocuments = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool CanAddResolutions = 7;</code>
     * @return bool
     */
    public function getCanAddResolutions()
    {
        return $this->CanAddResolutions;
    }

    /**
     * Generated from protobuf field <code>bool CanAddResolutions = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanAddResolutions($var)
    {
        GPBUtil::checkBool($var);
        $this->CanAddResolutions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool CanRequestResolutions = 8;</code>
     * @return bool
     */
    public function getCanRequestResolutions()
    {
        return $this->CanRequestResolutions;
    }

    /**
     * Generated from protobuf field <code>bool CanRequestResolutions = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanRequestResolutions($var)
    {
        GPBUtil::checkBool($var);
        $this->CanRequestResolutions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string SelectedDepartmentIds = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectedDepartmentIds()
    {
        return $this->SelectedDepartmentIds;
    }

    /**
     * Generated from protobuf field <code>repeated string SelectedDepartmentIds = 9;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectedDepartmentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->SelectedDepartmentIds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string JobTitle = 10;</code>
     * @return string
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }

    /**
     * Generated from protobuf field <code>string JobTitle = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setJobTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->JobTitle = $var;

        return $this;
    }

}
