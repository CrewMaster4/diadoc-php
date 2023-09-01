<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/Attachment.proto

namespace Diadoc\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Docflow.Attachment</code>
 */
class Attachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.Entity Entity = 1;</code>
     */
    protected $Entity = null;
    /**
     * Generated from protobuf field <code>string AttachmentFilename = 2;</code>
     */
    protected $AttachmentFilename = '';
    /**
     * Generated from protobuf field <code>string DisplayFilename = 3;</code>
     */
    protected $DisplayFilename = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\Docflow\Entity $Entity
     *     @type string $AttachmentFilename
     *     @type string $DisplayFilename
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\Attachment::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.Entity Entity = 1;</code>
     * @return \Diadoc\Proto\Docflow\Entity
     */
    public function getEntity()
    {
        return $this->Entity;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.Entity Entity = 1;</code>
     * @param \Diadoc\Proto\Docflow\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\Entity::class);
        $this->Entity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AttachmentFilename = 2;</code>
     * @return string
     */
    public function getAttachmentFilename()
    {
        return $this->AttachmentFilename;
    }

    /**
     * Generated from protobuf field <code>string AttachmentFilename = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachmentFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->AttachmentFilename = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DisplayFilename = 3;</code>
     * @return string
     */
    public function getDisplayFilename()
    {
        return $this->DisplayFilename;
    }

    /**
     * Generated from protobuf field <code>string DisplayFilename = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->DisplayFilename = $var;

        return $this;
    }

}

