<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-GetApi.proto

namespace GPBMetadata\Events;

class DiadocMessageGetApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Content::initOnce();
        \GPBMetadata\Documents\Document::initOnce();
        \GPBMetadata\Events\ResolutionInfo::initOnce();
        \GPBMetadata\Events\ResolutionRequestInfo::initOnce();
        \GPBMetadata\Events\ResolutionRequestDenialInfo::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac61a0a214576656e74732f446961646f634d6573736167652d47657441" .
            "70692e70726f746f1213446961646f632e50726f746f2e4576656e74731a" .
            "18446f63756d656e74732f446f63756d656e742e70726f746f1a1b457665" .
            "6e74732f5265736f6c7574696f6e496e666f2e70726f746f1a224576656e" .
            "74732f5265736f6c7574696f6e52657175657374496e666f2e70726f746f" .
            "1a284576656e74732f5265736f6c7574696f6e5265717565737444656e69" .
            "616c496e666f2e70726f746f22510a0c426f784576656e744c697374122d" .
            "0a064576656e747318012003280b321d2e446961646f632e50726f746f2e" .
            "4576656e74732e426f784576656e7412120a0a546f74616c436f756e7418" .
            "0220012805227c0a08426f784576656e74120f0a074576656e7449641801" .
            "20012809122d0a074d65737361676518022001280b321c2e446961646f63" .
            "2e50726f746f2e4576656e74732e4d65737361676512300a055061746368" .
            "18032001280b32212e446961646f632e50726f746f2e4576656e74732e4d" .
            "657373616765506174636822e0030a074d65737361676512110a094d6573" .
            "73616765496418012001280912160a0e54696d657374616d705469636b73" .
            "180220012810121f0a174c617374506174636854696d657374616d705469" .
            "636b7318032001281012110a0946726f6d426f7849641804200128091211" .
            "0a0946726f6d5469746c65180520012809120f0a07546f426f7849641806" .
            "20012809120f0a07546f5469746c65180720012809122d0a08456e746974" .
            "69657318082003280b321b2e446961646f632e50726f746f2e4576656e74" .
            "732e456e74697479120f0a074973447261667418092001280812150a0d44" .
            "7261667449734c6f636b6564180a2001280812170a0f4472616674497352" .
            "656379636c6564180b20012808121a0a124372656174656446726f6d4472" .
            "6166744964180c2001280912290a21447261667449735472616e73666f72" .
            "6d6564546f4d65737361676549644c697374180d2003280912110a094973" .
            "44656c65746564180e20012808120e0a06497354657374180f2001280812" .
            "120a0a4973496e7465726e616c18102001280812130a0b497350726f7869" .
            "6669656418112001280812120a0a50726f7879426f784964181220012809" .
            "12120a0a50726f78795469746c6518132001280912160a0e5061636b6574" .
            "49734c6f636b6564181420012808228a030a0c4d65737361676550617463" .
            "6812110a094d657373616765496418012001280912160a0e54696d657374" .
            "616d705469636b73180220012810122d0a08456e74697469657318032003" .
            "280b321b2e446961646f632e50726f746f2e4576656e74732e456e746974" .
            "7912100a08466f72447261667418042001280812170a0f44726166744973" .
            "52656379636c656418052001280812290a21447261667449735472616e73" .
            "666f726d6564546f4d65737361676549644c69737418062003280912150a" .
            "0d447261667449734c6f636b656418072001280812180a104d6573736167" .
            "65497344656c6574656418082001280812370a0d456e7469747950617463" .
            "68657318092003280b32202e446961646f632e50726f746f2e4576656e74" .
            "732e456e74697479506174636812190a114d657373616765497352657374" .
            "6f726564180a20012808121a0a124d657373616765497344656c69766572" .
            "6564180b2001280812180a1044656c69766572656450617463684964180c" .
            "20012809120f0a0750617463684964180d2001280922df050a06456e7469" .
            "747912330a0a456e746974795479706518012001280e321f2e446961646f" .
            "632e50726f746f2e4576656e74732e456e746974795479706512100a0845" .
            "6e74697479496418022001280912160a0e506172656e74456e7469747949" .
            "6418032001280912260a07436f6e74656e7418042001280b32152e446961" .
            "646f632e50726f746f2e436f6e74656e74123b0a0e4174746163686d656e" .
            "745479706518052001280e32232e446961646f632e50726f746f2e457665" .
            "6e74732e4174746163686d656e745479706512100a0846696c654e616d65" .
            "180620012809121e0a164e656564526563697069656e745369676e617475" .
            "726518072001280812130a0b5369676e6572426f78496418082001280912" .
            "1b0a134e6f7444656c6976657265644576656e744964180a200128091236" .
            "0a0c446f63756d656e74496e666f180b2001280b32202e446961646f632e" .
            "50726f746f2e446f63756d656e74732e446f63756d656e7412170a0f5261" .
            "774372656174696f6e44617465180c20012810123b0a0e5265736f6c7574" .
            "696f6e496e666f180d2001280b32232e446961646f632e50726f746f2e45" .
            "76656e74732e5265736f6c7574696f6e496e666f121a0a125369676e6572" .
            "4465706172746d656e744964180e2001280912490a155265736f6c757469" .
            "6f6e52657175657374496e666f180f2001280b322a2e446961646f632e50" .
            "726f746f2e4576656e74732e5265736f6c7574696f6e5265717565737449" .
            "6e666f12550a1b5265736f6c7574696f6e5265717565737444656e69616c" .
            "496e666f18102001280b32302e446961646f632e50726f746f2e4576656e" .
            "74732e5265736f6c7574696f6e5265717565737444656e69616c496e666f" .
            "12130a0b4e6565645265636569707418112001280812100a085061636b65" .
            "744964181220012809121e0a164973417070726f76656d656e745369676e" .
            "6174757265181320012808121a0a124973456e63727970746564436f6e74" .
            "656e7418142001280822a5010a0b456e74697479506174636812100a0845" .
            "6e74697479496418012001280912190a11446f63756d656e74497344656c" .
            "6574656418022001280812190a114d6f766564546f4465706172746d656e" .
            "74180320012809121a0a12446f63756d656e744973526573746f72656418" .
            "042001280812180a10436f6e74656e744973506174636865641805200128" .
            "0812180a10466f72776172646564546f426f7849641806200128092a420a" .
            "0a456e746974795479706512150a11556e6b6e6f776e456e746974795479" .
            "70651000120e0a0a4174746163686d656e741001120d0a095369676e6174" .
            "75726510022aef080a0e4174746163686d656e745479706512110a0d4e6f" .
            "6e666f726d616c697a6564100012220a15556e6b6e6f776e417474616368" .
            "6d656e745479706510ffffffffffffffffff01120b0a07496e766f696365" .
            "100112120a0e496e766f69636552656365697074100212170a13496e766f" .
            "696365436f6e6669726d6174696f6e1003121c0a18496e766f696365436f" .
            "7272656374696f6e52657175657374100412150a114174746163686d656e" .
            "74436f6d6d656e741005121f0a1b44656c69766572794661696c7572654e" .
            "6f74696669636174696f6e100612100a0c45616e636f6d496e766f696310" .
            "07121d0a195369676e61747572655265717565737452656a656374696f6e" .
            "100812280a24456372436174436f6e666f726d616e636543657274696669" .
            "636174654d657461646174611009121f0a1b5369676e6174757265566572" .
            "696669636174696f6e5265706f7274100a121a0a165472757374436f6e6e" .
            "656374696f6e52657175657374100b120a0a06546f72673132100c12130a" .
            "0f496e766f6963655265766973696f6e100d12150a11496e766f69636543" .
            "6f7272656374696f6e100e121d0a19496e766f696365436f727265637469" .
            "6f6e5265766973696f6e100f12190a15416363657074616e636543657274" .
            "69666963617465101012120a0e5374727563747572656444617461101112" .
            "130a0f50726f666f726d61496e766f6963651012120d0a09586d6c546f72" .
            "6731321013121c0a18586d6c416363657074616e63654365727469666963" .
            "617465101412170a13586d6c546f7267313242757965725469746c651015" .
            "12260a22586d6c416363657074616e636543657274696669636174654275" .
            "7965725469746c651016120e0a0a5265736f6c7574696f6e101712150a11" .
            "5265736f6c7574696f6e526571756573741018121b0a175265736f6c7574" .
            "696f6e5265717565737444656e69616c1019120d0a0950726963654c6973" .
            "74101a120b0a0752656365697074101b12190a15586d6c5369676e617475" .
            "726552656a656374696f6e101c12150a115265766f636174696f6e526571" .
            "75657374101d12160a1250726963654c69737441677265656d656e74101e" .
            "12170a1343657274696669636174655265676973747279102212150a1152" .
            "65636f6e63696c696174696f6e4163741023120c0a08436f6e7472616374" .
            "1024120a0a06546f72673133102512120a0e536572766963654465746169" .
            "6c73102612170a13526f616d696e674e6f74696669636174696f6e102712" .
            "1a0a16537570706c656d656e7461727941677265656d656e741028121d0a" .
            "19556e6976657273616c5472616e73666572446f63756d656e7410291227" .
            "0a23556e6976657273616c5472616e73666572446f63756d656e74427579" .
            "65725469746c65102a12250a21556e6976657273616c5472616e73666572" .
            "446f63756d656e745265766973696f6e102d120e0a0a437573746f6d4461" .
            "7461104012100a0c4d6f7665446f63756d656e74104112270a235265736f" .
            "6c7574696f6e436861696e41737369676e6d656e744174746163686d656e" .
            "741042620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
