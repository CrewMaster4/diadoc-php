<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/RevocationRequestInfo.proto

namespace GPBMetadata\Invoicing;

class RevocationRequestInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Invoicing\Signer::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa1010a25496e766f6963696e672f5265766f636174696f6e52657175657374496e666f2e70726f746f1216446961646f632e50726f746f2e496e766f6963696e6722580a155265766f636174696f6e52657175657374496e666f120f0a07436f6d6d656e74180120012809122e0a065369676e657218022001280b321e2e446961646f632e50726f746f2e496e766f6963696e672e5369676e6572620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

