<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-GetApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.BoxEventList</code>
 */
class BoxEventList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.BoxEvent Events = 1;</code>
     */
    private $Events;
    /**
     * Generated from protobuf field <code>int32 TotalCount = 2;</code>
     */
    private $TotalCount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\Events\BoxEvent[]|\Google\Protobuf\Internal\RepeatedField $Events
     *     @type int $TotalCount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessageGetApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.BoxEvent Events = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->Events;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Events.BoxEvent Events = 1;</code>
     * @param \Diadoc\Proto\Events\BoxEvent[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Events\BoxEvent::class);
        $this->Events = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 TotalCount = 2;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }

    /**
     * Generated from protobuf field <code>int32 TotalCount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->TotalCount = $var;

        return $this;
    }

}
