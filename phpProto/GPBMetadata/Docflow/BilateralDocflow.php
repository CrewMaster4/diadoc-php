<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/BilateralDocflow.proto

namespace GPBMetadata\Docflow;

class BilateralDocflow
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Docflow\ReceiptDocflow::initOnce();
        \GPBMetadata\Docflow\RecipientSignatureDocflow::initOnce();
        \GPBMetadata\Docflow\RecipientSignatureRejectionDocflow::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac0050a1e446f63666c6f772f42696c61746572616c446f63666c6f772e70726f746f1214446961646f632e50726f746f2e446f63666c6f771a27446f63666c6f772f526563697069656e745369676e6174757265446f63666c6f772e70726f746f1a30446f63666c6f772f526563697069656e745369676e617475726552656a656374696f6e446f63666c6f772e70726f746f22a4040a1042696c61746572616c446f63666c6f7712120a0a497346696e6973686564180120012808123c0a0e52656365697074446f63666c6f7718022001280b32242e446961646f632e50726f746f2e446f63666c6f772e52656365697074446f63666c6f7712520a19526563697069656e745369676e6174757265446f63666c6f7718032001280b322f2e446961646f632e50726f746f2e446f63666c6f772e526563697069656e745369676e6174757265446f63666c6f7712640a22526563697069656e745369676e617475726552656a656374696f6e446f63666c6f7718042001280b32382e446961646f632e50726f746f2e446f63666c6f772e526563697069656e745369676e617475726552656a656374696f6e446f63666c6f77121a0a1249735265636569707452657175657374656418052001280812250a1d4973526563697069656e745369676e617475726552657175657374656418062001280812230a1b4973446f63756d656e745369676e65644279526563697069656e7418072001280812250a1d4973446f63756d656e7452656a65637465644279526563697069656e74180820012808121e0a1643616e446f63756d656e74426552656365697074656418092001280812230a1b43616e446f63756d656e7442655369676e6564427953656e646572180a2001280812300a2843616e446f63756d656e7442655369676e65644f7252656a65637465644279526563697069656e74180b20012808620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

