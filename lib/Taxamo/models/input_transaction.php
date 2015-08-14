<?php
/**
 *  Copyright 2014 Taxamo, Ltd.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class Input_transaction {

  static $swaggerTypes = array(
      'buyer_credit_card_prefix' => 'string',
      'custom_data' => 'string',
      'buyer_name' => 'string',
      'invoice_date' => 'string',
      'currency_code' => 'string',
      'supply_date' => 'string',
      'invoice_address' => 'invoice_address',
      'verification_token' => 'string',
      'transaction_lines' => 'array[input_transaction_line]',
      'buyer_tax_number' => 'string',
      'status' => 'string',
      'custom_fields' => 'array[custom_fields]',
      'force_country_code' => 'string',
      'invoice_number' => 'string',
      'order_date' => 'string',
      'buyer_ip' => 'string',
      'buyer_email' => 'string',
      'original_transaction_key' => 'string',
      'billing_country_code' => 'string',
      'custom_id' => 'string',
      'additional_currencies' => 'additional_currencies',
      'invoice_place' => 'string',
      'evidence' => 'evidence',
      'description' => 'string',
      'tax_deducted' => 'bool',
      'tax_country_code' => 'string'

    );

  /**
  * Buyer's credit card prefix.
  */
  public $buyer_credit_card_prefix; // string
  /**
  * Custom data related to transaction.
  */
  public $custom_data; // string
  /**
  * Buyer's name - first name and last name or company name.
  */
  public $buyer_name; // string
  /**
  * Invoice date of issue.
  */
  public $invoice_date; // string
  /**
  * Currency code for transaction - e.g. EUR.
  */
  public $currency_code; // string
  /**
  * Supply date in yyyy-MM-dd format.
  */
  public $supply_date; // string
  /**
  * Invoice address.
  */
  public $invoice_address; // invoice_address
  /**
  * Verification token
  */
  public $verification_token; // string
  /**
  * Transaction lines.
  */
  public $transaction_lines; // array[input_transaction_line]
  /**
  *  Buyer's tax number - EU VAT number for example. If using EU VAT number, it is possible to provide country code in it (e.g. IE1234567X) or simply use billing_country_code field for that. In the first case, if billing_country_code value was provided, it will be overwritten with country code value extracted from VAT number - but only if the VAT has been verified properly.
  */
  public $buyer_tax_number; // string
  /**
  * Transaction status: 'N' - new, 'C' - confirmed, 'X' - cancelled, 'S' - settled. Can use 'C' in store-transaction! with private-token to create confirmed transaction, otherwise 'N' is default state. Not applicable for update-transaction!.
  */
  public $status; // string
  /**
  * Custom fields, stored as key-value pairs. This property is not processed and used mostly with Taxamo-built helpers.
  */
  public $custom_fields; // array[custom_fields]
  /**
  * Two-letter ISO country code, e.g. FR. Use it to force country code for tax calculation.
  */
  public $force_country_code; // string
  /**
  * Invoice number.
  */
  public $invoice_number; // string
  /**
  * Order date in yyyy-MM-dd format, in merchant's timezone. If provided by the API caller, no timezone conversion is performed. Default value is current date and time. When using public token, the default value is used.
  */
  public $order_date; // string
  /**
  * IP address of the buyer in dotted decimal (IPv4) or text format (IPv6).
  */
  public $buyer_ip; // string
  /**
  * Buyer's declared email address.
  */
  public $buyer_email; // string
  /**
  * Use data and evidence from original transaction. Tax will be re-calculated, but evidence won't be re-checked. This parameter is taken into account only when 'manual' flag is raised.
  */
  public $original_transaction_key; // string
  /**
  * Billing two letter ISO country code.
  */
  public $billing_country_code; // string
  /**
  * Custom identifier provided upon transaction creation.
  */
  public $custom_id; // string
  /**
  * Additional currency information - can be used to receive additional information about invoice in another currency.
  */
  public $additional_currencies; // additional_currencies
  /**
  * Invoice place of issue.
  */
  public $invoice_place; // string
  /**
  * Tax country of residence evidence.
  */
  public $evidence; // evidence
  /**
  * Transaction description.
  */
  public $description; // string
  /**
  * True if the transaction deducted from tax and no tax is applied. Either set automatically when VAT number validates with VIES correctly, but can also be provided in manual mode.
  */
  public $tax_deducted; // bool
  /**
  * Two-letter ISO country code, e.g. FR. This code applies to detected/set country for transaction, but can be set using manual mode.
  */
  public $tax_country_code; // string
  }

