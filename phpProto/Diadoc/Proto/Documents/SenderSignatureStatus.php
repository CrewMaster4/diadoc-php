<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/Document.proto

namespace Diadoc\Proto\Documents;

/**
 * Protobuf type <code>Diadoc.Proto.Documents.SenderSignatureStatus</code>
 */
class SenderSignatureStatus
{
    /**
     * Reserved status to report to legacy clients for newly introduced statuses
     *
     * Generated from protobuf enum <code>UnknownSenderSignatureStatus = 0;</code>
     */
    const UnknownSenderSignatureStatus = 0;
    /**
     * Generated from protobuf enum <code>WaitingForSenderSignature = 1;</code>
     */
    const WaitingForSenderSignature = 1;
    /**
     * Generated from protobuf enum <code>SenderSignatureUnchecked = 2;</code>
     */
    const SenderSignatureUnchecked = 2;
    /**
     * Generated from protobuf enum <code>SenderSignatureCheckedAndValid = 3;</code>
     */
    const SenderSignatureCheckedAndValid = 3;
    /**
     * Generated from protobuf enum <code>SenderSignatureCheckedAndInvalid = 4;</code>
     */
    const SenderSignatureCheckedAndInvalid = 4;
}

