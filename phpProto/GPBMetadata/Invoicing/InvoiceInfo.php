<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/InvoiceInfo.proto

namespace GPBMetadata\Invoicing;

class InvoiceInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Invoicing\Signer::initOnce();
        \GPBMetadata\Invoicing\OrganizationInfo::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae01a0a1b496e766f6963696e672f496e766f696365496e666f2e70726f" .
            "746f1216446961646f632e50726f746f2e496e766f6963696e671a20496e" .
            "766f6963696e672f4f7267616e697a6174696f6e496e666f2e70726f746f" .
            "22ff050a0b496e766f696365496e666f12130a0b496e766f696365446174" .
            "6518012001280912150a0d496e766f6963654e756d626572180220012809" .
            "123e0a0653656c6c657218032001280b322e2e446961646f632e50726f74" .
            "6f2e496e766f6963696e672e446961646f634f7267616e697a6174696f6e" .
            "496e666f123d0a05427579657218042001280b322e2e446961646f632e50" .
            "726f746f2e496e766f6963696e672e446961646f634f7267616e697a6174" .
            "696f6e496e666f123b0a075368697070657218052001280b322a2e446961" .
            "646f632e50726f746f2e496e766f6963696e672e536869707065724f7243" .
            "6f6e7369676e6565123d0a09436f6e7369676e656518062001280b322a2e" .
            "446961646f632e50726f746f2e496e766f6963696e672e53686970706572" .
            "4f72436f6e7369676e6565122e0a065369676e657218072001280b321e2e" .
            "446961646f632e50726f746f2e496e766f6963696e672e5369676e657212" .
            "450a105061796d656e74446f63756d656e747318082003280b322b2e4469" .
            "61646f632e50726f746f2e496e766f6963696e672e5061796d656e74446f" .
            "63756d656e74496e666f12320a054974656d7318092003280b32232e4469" .
            "61646f632e50726f746f2e496e766f6963696e672e496e766f6963654974" .
            "656d12100a0843757272656e6379180a20012809121c0a14546f74616c57" .
            "6974685661744578636c75646564180b20012809120b0a03566174180c20" .
            "012809120d0a05546f74616c180d2001280912160a0e4164646974696f6e" .
            "616c496e666f180e20012809121b0a13496e766f6963655265766973696f" .
            "6e44617465180f20012809121d0a15496e766f6963655265766973696f6e" .
            "4e756d626572181020012809123f0a0f4164646974696f6e616c496e666f" .
            "7318112003280b32262e446961646f632e50726f746f2e496e766f696369" .
            "6e672e4164646974696f6e616c496e666f123d0a0756657273696f6e1812" .
            "2001280e322c2e446961646f632e50726f746f2e496e766f6963696e672e" .
            "496e766f696365466f726d617456657273696f6e222b0a0e416464697469" .
            "6f6e616c496e666f120a0a024964180120012809120d0a0556616c756518" .
            "022001280922af030a0b496e766f6963654974656d120f0a0750726f6475" .
            "6374180120012809120c0a04556e697418022001280912100a085175616e" .
            "74697479180320012809120d0a05507269636518042001280912190a1143" .
            "6f756e74726965734f664f726967696e18052003280912210a1943757374" .
            "6f6d734465636c61726174696f6e4e756d62657273180620032809120e0a" .
            "0645786369736518072001280912300a075461785261746518082001280e" .
            "321f2e446961646f632e50726f746f2e496e766f6963696e672e54617852" .
            "617465121f0a17537562746f74616c576974685661744578636c75646564" .
            "180920012809120b0a03566174180a2001280912100a08537562746f7461" .
            "6c180b2001280912160a0e4164646974696f6e616c496e666f180c200128" .
            "0912470a13437573746f6d734465636c61726174696f6e73180d2003280b" .
            "322a2e446961646f632e50726f746f2e496e766f6963696e672e43757374" .
            "6f6d734465636c61726174696f6e123f0a0f4164646974696f6e616c496e" .
            "666f73180e2003280b32262e446961646f632e50726f746f2e496e766f69" .
            "63696e672e4164646974696f6e616c496e666f22440a12437573746f6d73" .
            "4465636c61726174696f6e12130a0b436f756e747279436f646518012001" .
            "280912190a114465636c61726174696f6e4e756d62657218022001280922" .
            "430a135061796d656e74446f63756d656e74496e666f12140a0c446f6375" .
            "6d656e744461746518012001280912160a0e446f63756d656e744e756d62" .
            "6572180220012809226c0a12536869707065724f72436f6e7369676e6565" .
            "121b0a1353616d65417353656c6c65724f72427579657218012001280812" .
            "390a074f7267496e666f18022001280b32282e446961646f632e50726f74" .
            "6f2e496e766f6963696e672e4f7267616e697a6174696f6e496e666f22a2" .
            "060a15496e766f696365436f7272656374696f6e496e666f12130a0b496e" .
            "766f6963654461746518012001280912150a0d496e766f6963654e756d62" .
            "6572180220012809121b0a13496e766f6963655265766973696f6e446174" .
            "65180320012809121d0a15496e766f6963655265766973696f6e4e756d62" .
            "6572180420012809121d0a15496e766f696365436f7272656374696f6e44" .
            "617465180520012809121f0a17496e766f696365436f7272656374696f6e" .
            "4e756d62657218062001280912250a1d496e766f696365436f7272656374" .
            "696f6e5265766973696f6e4461746518072001280912270a1f496e766f69" .
            "6365436f7272656374696f6e5265766973696f6e4e756d62657218082001" .
            "2809123e0a0653656c6c657218092001280b322e2e446961646f632e5072" .
            "6f746f2e496e766f6963696e672e446961646f634f7267616e697a617469" .
            "6f6e496e666f123d0a054275796572180a2001280b322e2e446961646f63" .
            "2e50726f746f2e496e766f6963696e672e446961646f634f7267616e697a" .
            "6174696f6e496e666f122e0a065369676e6572180b2001280b321e2e4469" .
            "61646f632e50726f746f2e496e766f6963696e672e5369676e6572123c0a" .
            "054974656d73180c2003280b322d2e446961646f632e50726f746f2e496e" .
            "766f6963696e672e496e766f696365436f7272656374696f6e4974656d12" .
            "100a0843757272656e6379180d20012809123c0a09546f74616c73496e63" .
            "180e2001280b32292e446961646f632e50726f746f2e496e766f6963696e" .
            "672e496e766f696365546f74616c7344696666123c0a09546f74616c7344" .
            "6563180f2001280b32292e446961646f632e50726f746f2e496e766f6963" .
            "696e672e496e766f696365546f74616c734469666612160a0e4164646974" .
            "696f6e616c496e666f181020012809123f0a0f4164646974696f6e616c49" .
            "6e666f7318112003280b32262e446961646f632e50726f746f2e496e766f" .
            "6963696e672e4164646974696f6e616c496e666f123d0a0756657273696f" .
            "6e18122001280e322c2e446961646f632e50726f746f2e496e766f696369" .
            "6e672e496e766f696365466f726d617456657273696f6e224d0a11496e76" .
            "6f696365546f74616c7344696666121c0a14546f74616c57697468566174" .
            "4578636c75646564180120012809120b0a03566174180220012809120d0a" .
            "05546f74616c18032001280922a6030a15496e766f696365436f72726563" .
            "74696f6e4974656d120f0a0750726f64756374180120012809124c0a0e4f" .
            "726967696e616c56616c75657318022001280b32342e446961646f632e50" .
            "726f746f2e496e766f6963696e672e436f727265637461626c65496e766f" .
            "6963654974656d4669656c6473124d0a0f436f7272656374656456616c75" .
            "657318032001280b32342e446961646f632e50726f746f2e496e766f6963" .
            "696e672e436f727265637461626c65496e766f6963654974656d4669656c" .
            "647312420a0a416d6f756e7473496e6318042001280b322e2e446961646f" .
            "632e50726f746f2e496e766f6963696e672e496e766f6963654974656d41" .
            "6d6f756e74734469666612420a0a416d6f756e747344656318052001280b" .
            "322e2e446961646f632e50726f746f2e496e766f6963696e672e496e766f" .
            "6963654974656d416d6f756e74734469666612160a0e4164646974696f6e" .
            "616c496e666f180620012809123f0a0f4164646974696f6e616c496e666f" .
            "7318072003280b32262e446961646f632e50726f746f2e496e766f696369" .
            "6e672e4164646974696f6e616c496e666f22cf010a1c436f727265637461" .
            "626c65496e766f6963654974656d4669656c6473120c0a04556e69741801" .
            "2001280912100a085175616e74697479180220012809120d0a0550726963" .
            "65180320012809120e0a0645786369736518042001280912300a07546178" .
            "5261746518052001280e321f2e446961646f632e50726f746f2e496e766f" .
            "6963696e672e54617852617465121f0a17537562746f74616c5769746856" .
            "61744578636c75646564180620012809120b0a0356617418072001280912" .
            "100a08537562746f74616c18082001280922680a16496e766f6963654974" .
            "656d416d6f756e747344696666120e0a0645786369736518012001280912" .
            "1f0a17537562746f74616c576974685661744578636c7564656418022001" .
            "2809120b0a0356617418032001280912100a08537562746f74616c180420" .
            "0128092a4d0a14496e766f696365466f726d617456657273696f6e121f0a" .
            "1b44656661756c74496e766f696365466f726d617456657273696f6e1000" .
            "12090a0576355f3031100112090a0576355f303210022a7d0a0754617852" .
            "61746512090a054e6f5661741000120d0a0950657263656e745f30100112" .
            "0e0a0a50657263656e745f31301002120e0a0a50657263656e745f313810" .
            "03120e0a0a50657263656e745f3230100412130a0f4672616374696f6e5f" .
            "31305f313130100512130a0f4672616374696f6e5f31385f313138100662" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

