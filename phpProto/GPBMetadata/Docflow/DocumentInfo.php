<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocumentInfo.proto

namespace GPBMetadata\Docflow;

class DocumentInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\DocumentType::initOnce();
        \GPBMetadata\DocumentDirection::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad90e0a1a446f63666c6f772f446f63756d656e74496e666f2e70726f74" .
            "6f1214446961646f632e50726f746f2e446f63666c6f771a17446f63756d" .
            "656e74446972656374696f6e2e70726f746f22fb050a0c446f63756d656e" .
            "74496e666f12300a0c446f63756d656e745479706518012001280e321a2e" .
            "446961646f632e50726f746f2e446f63756d656e7454797065123a0a1144" .
            "6f63756d656e74446972656374696f6e18022001280e321f2e446961646f" .
            "632e50726f746f2e446f63756d656e74446972656374696f6e120e0a0649" .
            "735465737418032001280812180a10437573746f6d446f63756d656e7449" .
            "6418042001280912180a1046726f6d4465706172746d656e744964180520" .
            "01280912160a0e546f4465706172746d656e74496418062001280912190a" .
            "11436f756e7465726167656e74426f784964180720012809124a0a15446f" .
            "63756d656e7444617465416e644e756d62657218082001280b322b2e4469" .
            "61646f632e50726f746f2e446f63666c6f772e446f63756d656e74446174" .
            "65416e644e756d62657212420a114261736963446f63756d656e74496e66" .
            "6f18092001280b32272e446961646f632e50726f746f2e446f63666c6f77" .
            "2e4261736963446f63756d656e74496e666f123e0a0b496e766f69636549" .
            "6e666f180a2001280b32292e446961646f632e50726f746f2e446f63666c" .
            "6f772e496e766f696365446f63756d656e74496e666f12520a15496e766f" .
            "696365436f7272656374696f6e496e666f180b2001280b32332e44696164" .
            "6f632e50726f746f2e446f63666c6f772e496e766f696365436f72726563" .
            "74696f6e446f63756d656e74496e666f12420a0d50726963654c69737449" .
            "6e666f180c2001280b322b2e446961646f632e50726f746f2e446f63666c" .
            "6f772e50726963654c697374446f63756d656e74496e666f12400a0c436f" .
            "6e7472616374496e666f180d2001280b322a2e446961646f632e50726f74" .
            "6f2e446f63666c6f772e436f6e7472616374446f63756d656e74496e666f" .
            "125c0a1a537570706c656d656e7461727941677265656d656e74496e666f" .
            "180e2001280b32382e446961646f632e50726f746f2e446f63666c6f772e" .
            "537570706c656d656e7461727941677265656d656e74446f63756d656e74" .
            "496e666f22450a15446f63756d656e7444617465416e644e756d62657212" .
            "140a0c446f63756d656e744461746518012001280912160a0e446f63756d" .
            "656e744e756d626572180220012809224f0a114261736963446f63756d65" .
            "6e74496e666f120d0a05546f74616c180120012809120d0a054e6f566174" .
            "180220012808120b0a03566174180320012809120f0a0747726f756e6473" .
            "180420012809229a010a13496e766f696365446f63756d656e74496e666f" .
            "120d0a05546f74616c180120012809120b0a035661741802200128091214" .
            "0a0c43757272656e6379436f646518032001280512510a1c4f726967696e" .
            "616c496e766f69636544617465416e644e756d62657218042001280b322b" .
            "2e446961646f632e50726f746f2e446f63666c6f772e446f63756d656e74" .
            "44617465416e644e756d6265722284030a1d496e766f696365436f727265" .
            "6374696f6e446f63756d656e74496e666f12100a08546f74616c496e6318" .
            "012001280912100a08546f74616c446563180220012809120e0a06566174" .
            "496e63180320012809120e0a0656617444656318042001280912140a0c43" .
            "757272656e6379436f646518052001280512510a1c4f726967696e616c49" .
            "6e766f69636544617465416e644e756d62657218062001280b322b2e4469" .
            "61646f632e50726f746f2e446f63666c6f772e446f63756d656e74446174" .
            "65416e644e756d62657212590a244f726967696e616c496e766f69636552" .
            "65766973696f6e44617465416e644e756d62657218072001280b322b2e44" .
            "6961646f632e50726f746f2e446f63666c6f772e446f63756d656e744461" .
            "7465416e644e756d626572125b0a264f726967696e616c496e766f696365" .
            "436f7272656374696f6e44617465416e644e756d62657218082001280b32" .
            "2b2e446961646f632e50726f746f2e446f63666c6f772e446f63756d656e" .
            "7444617465416e644e756d626572228b010a1550726963654c697374446f" .
            "63756d656e74496e666f121e0a1650726963654c69737445666665637469" .
            "76654461746518012001280912520a1d436f6e7472616374446f63756d65" .
            "6e7444617465416e644e756d62657218022001280b322b2e446961646f63" .
            "2e50726f746f2e446f63666c6f772e446f63756d656e7444617465416e64" .
            "4e756d62657222430a14436f6e7472616374446f63756d656e74496e666f" .
            "12150a0d436f6e7472616374507269636518012001280912140a0c436f6e" .
            "74726163745479706518022001280922770a22537570706c656d656e7461" .
            "727941677265656d656e74446f63756d656e74496e666f120d0a05546f74" .
            "616c18012001280912140a0c436f6e747261637454797065180220012809" .
            "12160a0e436f6e74726163744e756d62657218032001280912140a0c436f" .
            "6e747261637444617465180420012809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
