<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: demo.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>pb.HelloReply</code>
 */
class HelloReply extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 code = 1;</code>
     */
    private $code = 0;
    /**
     * <code>string msg = 2;</code>
     */
    private $msg = '';

    public function __construct() {
        \GPBMetadata\Demo::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 code = 1;</code>
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <code>int32 code = 1;</code>
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;
    }

    /**
     * <code>string msg = 2;</code>
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * <code>string msg = 2;</code>
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;
    }

}

