<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ForwardDocumentEvent.proto

namespace GPBMetadata;

class ForwardDocumentEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a87010a1a466f7277617264446f63756d656e744576656e742e70726f74" .
            "6f120c446961646f632e50726f746f22530a14466f7277617264446f6375" .
            "6d656e744576656e74122a0a0954696d657374616d7018012001280b3217" .
            "2e446961646f632e50726f746f2e54696d657374616d70120f0a07546f42" .
            "6f784964180220012809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
