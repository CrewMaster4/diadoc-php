<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/ExtendedSigner.proto

namespace Diadoc\Proto\Invoicing\Signers;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Invoicing.Signers.ExtendedSignerDetails</code>
 */
class ExtendedSignerDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Surname = 1;</code>
     */
    private $Surname = '';
    /**
     * Generated from protobuf field <code>string FirstName = 2;</code>
     */
    private $FirstName = '';
    /**
     * Generated from protobuf field <code>string Patronymic = 3;</code>
     */
    private $Patronymic = '';
    /**
     * Generated from protobuf field <code>string JobTitle = 4;</code>
     */
    private $JobTitle = '';
    /**
     * Generated from protobuf field <code>string Inn = 5;</code>
     */
    private $Inn = '';
    /**
     * Generated from protobuf field <code>string RegistrationCertificate = 6;</code>
     */
    private $RegistrationCertificate = '';
    /**
     * Физическое лицо-Индивидуальный предприниматель – представитель юридического лица (ФЛ-ИП-ЮЛ)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.Signers.SignerType SignerType = 7;</code>
     */
    private $SignerType = 0;
    /**
     * Наименование (НаимОрг)
     *
     * Generated from protobuf field <code>string SignerOrganizationName = 8;</code>
     */
    private $SignerOrganizationName = '';
    /**
     * Иные сведения, идентифицирующие физическое лицо (ИныеСвед)
     *
     * Generated from protobuf field <code>string SignerInfo = 9;</code>
     */
    private $SignerInfo = '';
    /**
     * Область полномочий (ОблПолн)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.Signers.SignerPowers SignerPowers = 10;</code>
     */
    private $SignerPowers = 0;
    /**
     * Статус (Статус)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.Signers.SignerStatus SignerStatus = 11;</code>
     */
    private $SignerStatus = 0;
    /**
     * Основание полномочий (доверия) (ОснПолн)
     *
     * Generated from protobuf field <code>string SignerPowersBase = 12;</code>
     */
    private $SignerPowersBase = '';
    /**
     * Основание полномочий (доверия) организации (ОснПолнОрг)
     *
     * Generated from protobuf field <code>string SignerOrgPowersBase = 13;</code>
     */
    private $SignerOrgPowersBase = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Surname
     *     @type string $FirstName
     *     @type string $Patronymic
     *     @type string $JobTitle
     *     @type string $Inn
     *     @type string $RegistrationCertificate
     *     @type int $SignerType
     *           Физическое лицо-Индивидуальный предприниматель – представитель юридического лица (ФЛ-ИП-ЮЛ)
     *     @type string $SignerOrganizationName
     *           Наименование (НаимОрг)
     *     @type string $SignerInfo
     *           Иные сведения, идентифицирующие физическое лицо (ИныеСвед)
     *     @type int $SignerPowers
     *           Область полномочий (ОблПолн)
     *     @type int $SignerStatus
     *           Статус (Статус)
     *     @type string $SignerPowersBase
     *           Основание полномочий (доверия) (ОснПолн)
     *     @type string $SignerOrgPowersBase
     *           Основание полномочий (доверия) организации (ОснПолнОрг)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\ExtendedSigner::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Surname = 1;</code>
     * @return string
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * Generated from protobuf field <code>string Surname = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSurname($var)
    {
        GPBUtil::checkString($var, True);
        $this->Surname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FirstName = 2;</code>
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Generated from protobuf field <code>string FirstName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FirstName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Patronymic = 3;</code>
     * @return string
     */
    public function getPatronymic()
    {
        return $this->Patronymic;
    }

    /**
     * Generated from protobuf field <code>string Patronymic = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPatronymic($var)
    {
        GPBUtil::checkString($var, True);
        $this->Patronymic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string JobTitle = 4;</code>
     * @return string
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }

    /**
     * Generated from protobuf field <code>string JobTitle = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJobTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->JobTitle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Inn = 5;</code>
     * @return string
     */
    public function getInn()
    {
        return $this->Inn;
    }

    /**
     * Generated from protobuf field <code>string Inn = 5;</code>
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
     * Generated from protobuf field <code>string RegistrationCertificate = 6;</code>
     * @return string
     */
    public function getRegistrationCertificate()
    {
        return $this->RegistrationCertificate;
    }

    /**
     * Generated from protobuf field <code>string RegistrationCertificate = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRegistrationCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->RegistrationCertificate = $var;

        return $this;
    }

    /**
     * Физическое лицо-Индивидуальный предприниматель – представитель юридического лица (ФЛ-ИП-ЮЛ)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.Signers.SignerType SignerType = 7;</code>
     * @return int
     */
    public function getSignerType()
    {
        return $this->SignerType;
    }

    /**
     * Физическое лицо-Индивидуальный предприниматель – представитель юридического лица (ФЛ-ИП-ЮЛ)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.Signers.SignerType SignerType = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSignerType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Invoicing\Signers\SignerType::class);
        $this->SignerType = $var;

        return $this;
    }

    /**
     * Наименование (НаимОрг)
     *
     * Generated from protobuf field <code>string SignerOrganizationName = 8;</code>
     * @return string
     */
    public function getSignerOrganizationName()
    {
        return $this->SignerOrganizationName;
    }

    /**
     * Наименование (НаимОрг)
     *
     * Generated from protobuf field <code>string SignerOrganizationName = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerOrganizationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerOrganizationName = $var;

        return $this;
    }

    /**
     * Иные сведения, идентифицирующие физическое лицо (ИныеСвед)
     *
     * Generated from protobuf field <code>string SignerInfo = 9;</code>
     * @return string
     */
    public function getSignerInfo()
    {
        return $this->SignerInfo;
    }

    /**
     * Иные сведения, идентифицирующие физическое лицо (ИныеСвед)
     *
     * Generated from protobuf field <code>string SignerInfo = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerInfo = $var;

        return $this;
    }

    /**
     * Область полномочий (ОблПолн)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.Signers.SignerPowers SignerPowers = 10;</code>
     * @return int
     */
    public function getSignerPowers()
    {
        return $this->SignerPowers;
    }

    /**
     * Область полномочий (ОблПолн)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.Signers.SignerPowers SignerPowers = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSignerPowers($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Invoicing\Signers\SignerPowers::class);
        $this->SignerPowers = $var;

        return $this;
    }

    /**
     * Статус (Статус)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.Signers.SignerStatus SignerStatus = 11;</code>
     * @return int
     */
    public function getSignerStatus()
    {
        return $this->SignerStatus;
    }

    /**
     * Статус (Статус)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.Signers.SignerStatus SignerStatus = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setSignerStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Invoicing\Signers\SignerStatus::class);
        $this->SignerStatus = $var;

        return $this;
    }

    /**
     * Основание полномочий (доверия) (ОснПолн)
     *
     * Generated from protobuf field <code>string SignerPowersBase = 12;</code>
     * @return string
     */
    public function getSignerPowersBase()
    {
        return $this->SignerPowersBase;
    }

    /**
     * Основание полномочий (доверия) (ОснПолн)
     *
     * Generated from protobuf field <code>string SignerPowersBase = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerPowersBase($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerPowersBase = $var;

        return $this;
    }

    /**
     * Основание полномочий (доверия) организации (ОснПолнОрг)
     *
     * Generated from protobuf field <code>string SignerOrgPowersBase = 13;</code>
     * @return string
     */
    public function getSignerOrgPowersBase()
    {
        return $this->SignerOrgPowersBase;
    }

    /**
     * Основание полномочий (доверия) организации (ОснПолнОрг)
     *
     * Generated from protobuf field <code>string SignerOrgPowersBase = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerOrgPowersBase($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerOrgPowersBase = $var;

        return $this;
    }

}
