<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/UniversalTransferDocumentInfo.proto

namespace Diadoc\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Invoicing.ExtendedInvoiceItem</code>
 */
class ExtendedInvoiceItem extends \Google\Protobuf\Internal\Message
{
    /**
     * наименование товара // НаимТов
     *
     * Generated from protobuf field <code>string Product = 1;</code>
     */
    protected $Product = '';
    /**
     * единицы измерения товара (код) // ОКЕИ_Тов
     *
     * Generated from protobuf field <code>string Unit = 2;</code>
     */
    protected $Unit = '';
    /**
     * наименование единицы измерения товара. Пользователь заполняет, если ОКЕИ_Тов=’0000’               // НаимЕдИзм
     *
     * Generated from protobuf field <code>string UnitName = 3;</code>
     */
    protected $UnitName = '';
    /**
     * количество единиц товара // КолТов
     *
     * Generated from protobuf field <code>string Quantity = 4;</code>
     */
    protected $Quantity = '';
    /**
     * цена за единицу товара // ЦенаТов
     *
     * Generated from protobuf field <code>string Price = 5;</code>
     */
    protected $Price = '';
    /**
     * акциз // СумАкциз
     *
     * Generated from protobuf field <code>string Excise = 6;</code>
     */
    protected $Excise = '';
    /**
     * ставка налога // НалСт
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.TaxRate TaxRate = 7;</code>
     */
    protected $TaxRate = 0;
    /**
     * сумма без учета налога // СтТовБезНДС
     *
     * Generated from protobuf field <code>string SubtotalWithVatExcluded = 8;</code>
     */
    protected $SubtotalWithVatExcluded = '';
    /**
     * сумма налога // СумНал
     *
     * Generated from protobuf field <code>string Vat = 9;</code>
     */
    protected $Vat = '';
    /**
     * сумма всего // СтТовУчНал
     *
     * Generated from protobuf field <code>string Subtotal = 10;</code>
     */
    protected $Subtotal = '';
    /**
     * номера таможенных деклараций // СвТД
     *
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Invoicing.CustomsDeclaration CustomsDeclarations = 11;</code>
     */
    private $CustomsDeclarations;
    /**
     * Признак товар-работа-услуга // ПрТовРаб
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.ItemMark ItemMark = 12;</code>
     */
    protected $ItemMark = 0;
    /**
     * Дополнительная информация о признаке //ДопПризн
     *
     * Generated from protobuf field <code>string AdditionalProperty = 13;</code>
     */
    protected $AdditionalProperty = '';
    /**
     * Характеристика/код/артикул/сорт товара // КодТов
     *
     * Generated from protobuf field <code>string ItemVendorCode = 14;</code>
     */
    protected $ItemVendorCode = '';
    /**
     * Количество надлежит отпустить // НадлОтп
     *
     * Generated from protobuf field <code>string ItemToRelease = 15;</code>
     */
    protected $ItemToRelease = '';
    /**
     * Корреспондирующие счета: дебет // КорСчДебет
     *
     * Generated from protobuf field <code>string ItemAccountDebit = 16;</code>
     */
    protected $ItemAccountDebit = '';
    /**
     * Корреспондирующие счета: кредит // КорСчКредит
     *
     * Generated from protobuf field <code>string ItemAccountCredit = 17;</code>
     */
    protected $ItemAccountCredit = '';
    /**
     * информационное поле документа // ИнфПолФХЖ2
     *
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Invoicing.AdditionalInfo AdditionalInfo = 18;</code>
     */
    private $AdditionalInfo;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Product
     *           наименование товара // НаимТов
     *     @type string $Unit
     *           единицы измерения товара (код) // ОКЕИ_Тов
     *     @type string $UnitName
     *           наименование единицы измерения товара. Пользователь заполняет, если ОКЕИ_Тов=’0000’               // НаимЕдИзм
     *     @type string $Quantity
     *           количество единиц товара // КолТов
     *     @type string $Price
     *           цена за единицу товара // ЦенаТов
     *     @type string $Excise
     *           акциз // СумАкциз
     *     @type int $TaxRate
     *           ставка налога // НалСт
     *     @type string $SubtotalWithVatExcluded
     *           сумма без учета налога // СтТовБезНДС
     *     @type string $Vat
     *           сумма налога // СумНал
     *     @type string $Subtotal
     *           сумма всего // СтТовУчНал
     *     @type \Diadoc\Proto\Invoicing\CustomsDeclaration[]|\Google\Protobuf\Internal\RepeatedField $CustomsDeclarations
     *           номера таможенных деклараций // СвТД
     *     @type int $ItemMark
     *           Признак товар-работа-услуга // ПрТовРаб
     *     @type string $AdditionalProperty
     *           Дополнительная информация о признаке //ДопПризн
     *     @type string $ItemVendorCode
     *           Характеристика/код/артикул/сорт товара // КодТов
     *     @type string $ItemToRelease
     *           Количество надлежит отпустить // НадлОтп
     *     @type string $ItemAccountDebit
     *           Корреспондирующие счета: дебет // КорСчДебет
     *     @type string $ItemAccountCredit
     *           Корреспондирующие счета: кредит // КорСчКредит
     *     @type \Diadoc\Proto\Invoicing\AdditionalInfo[]|\Google\Protobuf\Internal\RepeatedField $AdditionalInfo
     *           информационное поле документа // ИнфПолФХЖ2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\UniversalTransferDocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * наименование товара // НаимТов
     *
     * Generated from protobuf field <code>string Product = 1;</code>
     * @return string
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * наименование товара // НаимТов
     *
     * Generated from protobuf field <code>string Product = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkString($var, True);
        $this->Product = $var;

        return $this;
    }

    /**
     * единицы измерения товара (код) // ОКЕИ_Тов
     *
     * Generated from protobuf field <code>string Unit = 2;</code>
     * @return string
     */
    public function getUnit()
    {
        return $this->Unit;
    }

    /**
     * единицы измерения товара (код) // ОКЕИ_Тов
     *
     * Generated from protobuf field <code>string Unit = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkString($var, True);
        $this->Unit = $var;

        return $this;
    }

    /**
     * наименование единицы измерения товара. Пользователь заполняет, если ОКЕИ_Тов=’0000’               // НаимЕдИзм
     *
     * Generated from protobuf field <code>string UnitName = 3;</code>
     * @return string
     */
    public function getUnitName()
    {
        return $this->UnitName;
    }

    /**
     * наименование единицы измерения товара. Пользователь заполняет, если ОКЕИ_Тов=’0000’               // НаимЕдИзм
     *
     * Generated from protobuf field <code>string UnitName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUnitName($var)
    {
        GPBUtil::checkString($var, True);
        $this->UnitName = $var;

        return $this;
    }

    /**
     * количество единиц товара // КолТов
     *
     * Generated from protobuf field <code>string Quantity = 4;</code>
     * @return string
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * количество единиц товара // КолТов
     *
     * Generated from protobuf field <code>string Quantity = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkString($var, True);
        $this->Quantity = $var;

        return $this;
    }

    /**
     * цена за единицу товара // ЦенаТов
     *
     * Generated from protobuf field <code>string Price = 5;</code>
     * @return string
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * цена за единицу товара // ЦенаТов
     *
     * Generated from protobuf field <code>string Price = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkString($var, True);
        $this->Price = $var;

        return $this;
    }

    /**
     * акциз // СумАкциз
     *
     * Generated from protobuf field <code>string Excise = 6;</code>
     * @return string
     */
    public function getExcise()
    {
        return $this->Excise;
    }

    /**
     * акциз // СумАкциз
     *
     * Generated from protobuf field <code>string Excise = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExcise($var)
    {
        GPBUtil::checkString($var, True);
        $this->Excise = $var;

        return $this;
    }

    /**
     * ставка налога // НалСт
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.TaxRate TaxRate = 7;</code>
     * @return int
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * ставка налога // НалСт
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.TaxRate TaxRate = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTaxRate($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Invoicing\TaxRate::class);
        $this->TaxRate = $var;

        return $this;
    }

    /**
     * сумма без учета налога // СтТовБезНДС
     *
     * Generated from protobuf field <code>string SubtotalWithVatExcluded = 8;</code>
     * @return string
     */
    public function getSubtotalWithVatExcluded()
    {
        return $this->SubtotalWithVatExcluded;
    }

    /**
     * сумма без учета налога // СтТовБезНДС
     *
     * Generated from protobuf field <code>string SubtotalWithVatExcluded = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSubtotalWithVatExcluded($var)
    {
        GPBUtil::checkString($var, True);
        $this->SubtotalWithVatExcluded = $var;

        return $this;
    }

    /**
     * сумма налога // СумНал
     *
     * Generated from protobuf field <code>string Vat = 9;</code>
     * @return string
     */
    public function getVat()
    {
        return $this->Vat;
    }

    /**
     * сумма налога // СумНал
     *
     * Generated from protobuf field <code>string Vat = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setVat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vat = $var;

        return $this;
    }

    /**
     * сумма всего // СтТовУчНал
     *
     * Generated from protobuf field <code>string Subtotal = 10;</code>
     * @return string
     */
    public function getSubtotal()
    {
        return $this->Subtotal;
    }

    /**
     * сумма всего // СтТовУчНал
     *
     * Generated from protobuf field <code>string Subtotal = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSubtotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->Subtotal = $var;

        return $this;
    }

    /**
     * номера таможенных деклараций // СвТД
     *
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Invoicing.CustomsDeclaration CustomsDeclarations = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomsDeclarations()
    {
        return $this->CustomsDeclarations;
    }

    /**
     * номера таможенных деклараций // СвТД
     *
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Invoicing.CustomsDeclaration CustomsDeclarations = 11;</code>
     * @param \Diadoc\Proto\Invoicing\CustomsDeclaration[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomsDeclarations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Invoicing\CustomsDeclaration::class);
        $this->CustomsDeclarations = $arr;

        return $this;
    }

    /**
     * Признак товар-работа-услуга // ПрТовРаб
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.ItemMark ItemMark = 12;</code>
     * @return int
     */
    public function getItemMark()
    {
        return $this->ItemMark;
    }

    /**
     * Признак товар-работа-услуга // ПрТовРаб
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Invoicing.ItemMark ItemMark = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setItemMark($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Invoicing\ItemMark::class);
        $this->ItemMark = $var;

        return $this;
    }

    /**
     * Дополнительная информация о признаке //ДопПризн
     *
     * Generated from protobuf field <code>string AdditionalProperty = 13;</code>
     * @return string
     */
    public function getAdditionalProperty()
    {
        return $this->AdditionalProperty;
    }

    /**
     * Дополнительная информация о признаке //ДопПризн
     *
     * Generated from protobuf field <code>string AdditionalProperty = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setAdditionalProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->AdditionalProperty = $var;

        return $this;
    }

    /**
     * Характеристика/код/артикул/сорт товара // КодТов
     *
     * Generated from protobuf field <code>string ItemVendorCode = 14;</code>
     * @return string
     */
    public function getItemVendorCode()
    {
        return $this->ItemVendorCode;
    }

    /**
     * Характеристика/код/артикул/сорт товара // КодТов
     *
     * Generated from protobuf field <code>string ItemVendorCode = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setItemVendorCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->ItemVendorCode = $var;

        return $this;
    }

    /**
     * Количество надлежит отпустить // НадлОтп
     *
     * Generated from protobuf field <code>string ItemToRelease = 15;</code>
     * @return string
     */
    public function getItemToRelease()
    {
        return $this->ItemToRelease;
    }

    /**
     * Количество надлежит отпустить // НадлОтп
     *
     * Generated from protobuf field <code>string ItemToRelease = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setItemToRelease($var)
    {
        GPBUtil::checkString($var, True);
        $this->ItemToRelease = $var;

        return $this;
    }

    /**
     * Корреспондирующие счета: дебет // КорСчДебет
     *
     * Generated from protobuf field <code>string ItemAccountDebit = 16;</code>
     * @return string
     */
    public function getItemAccountDebit()
    {
        return $this->ItemAccountDebit;
    }

    /**
     * Корреспондирующие счета: дебет // КорСчДебет
     *
     * Generated from protobuf field <code>string ItemAccountDebit = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setItemAccountDebit($var)
    {
        GPBUtil::checkString($var, True);
        $this->ItemAccountDebit = $var;

        return $this;
    }

    /**
     * Корреспондирующие счета: кредит // КорСчКредит
     *
     * Generated from protobuf field <code>string ItemAccountCredit = 17;</code>
     * @return string
     */
    public function getItemAccountCredit()
    {
        return $this->ItemAccountCredit;
    }

    /**
     * Корреспондирующие счета: кредит // КорСчКредит
     *
     * Generated from protobuf field <code>string ItemAccountCredit = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setItemAccountCredit($var)
    {
        GPBUtil::checkString($var, True);
        $this->ItemAccountCredit = $var;

        return $this;
    }

    /**
     * информационное поле документа // ИнфПолФХЖ2
     *
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Invoicing.AdditionalInfo AdditionalInfo = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }

    /**
     * информационное поле документа // ИнфПолФХЖ2
     *
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Invoicing.AdditionalInfo AdditionalInfo = 18;</code>
     * @param \Diadoc\Proto\Invoicing\AdditionalInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Invoicing\AdditionalInfo::class);
        $this->AdditionalInfo = $arr;

        return $this;
    }

}

