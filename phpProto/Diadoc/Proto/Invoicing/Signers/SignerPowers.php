<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/ExtendedSigner.proto

namespace Diadoc\Proto\Invoicing\Signers;

/**
 * Protobuf type <code>Diadoc.Proto.Invoicing.Signers.SignerPowers</code>
 */
class SignerPowers
{
    /**
     * лицо, ответственное за подписание счетов-фактур
     *
     * Generated from protobuf enum <code>InvoiceSigner = 0;</code>
     */
    const InvoiceSigner = 0;
    /**
     * лицо, совершившее сделку, операцию
     *
     * Generated from protobuf enum <code>PersonMadeOperation = 1;</code>
     */
    const PersonMadeOperation = 1;
    /**
     * лицо, совершившее сделку, операцию и ответственное за её оформление;
     *
     * Generated from protobuf enum <code>MadeAndSignOperation = 2;</code>
     */
    const MadeAndSignOperation = 2;
    /**
     * лицо, ответственное за оформление свершившегося события;
     *
     * Generated from protobuf enum <code>PersonDocumentedOperation = 3;</code>
     */
    const PersonDocumentedOperation = 3;
    /**
     * лицо, совершившее сделку, операцию и ответственное за подписание счетов-фактур;
     *
     * Generated from protobuf enum <code>MadeOperationAndSignedInvoice = 4;</code>
     */
    const MadeOperationAndSignedInvoice = 4;
    /**
     * лицо, совершившее сделку, операцию и ответственное за её оформление и за подписание счетов-фактур;
     *
     * Generated from protobuf enum <code>MadeAndResponsibleForOperationAndSignedInvoice = 5;</code>
     */
    const MadeAndResponsibleForOperationAndSignedInvoice = 5;
    /**
     * лицо, ответственное за оформление свершившегося события и за подписание счетов-фактур
     *
     * Generated from protobuf enum <code>ResponsibleForOperationAndSignerForInvoice = 6;</code>
     */
    const ResponsibleForOperationAndSignerForInvoice = 6;
}
