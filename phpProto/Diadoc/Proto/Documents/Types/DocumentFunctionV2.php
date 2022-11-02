<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/Types/DocumentTypeDescriptionV2.proto

namespace Diadoc\Proto\Documents\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Documents.Types.DocumentFunctionV2</code>
 */
class DocumentFunctionV2 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentVersionV2 Versions = 2;</code>
     */
    private $Versions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Name
     *     @type \Diadoc\Proto\Documents\Types\DocumentVersionV2[]|\Google\Protobuf\Internal\RepeatedField $Versions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\Types\DocumentTypeDescriptionV2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentVersionV2 Versions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVersions()
    {
        return $this->Versions;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentVersionV2 Versions = 2;</code>
     * @param \Diadoc\Proto\Documents\Types\DocumentVersionV2[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Documents\Types\DocumentVersionV2::class);
        $this->Versions = $arr;

        return $this;
    }

}
