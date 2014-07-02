<?php
/**
 *  Copyright 2011 Wordnik, Inc.
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
class Transactions {

  static $swaggerTypes = array(
      'invoice_date' => 'string',
      'invoice_address' => 'invoice_address',
      'manual' => 'bool',
      'buyer_credit_card_prefix' => 'string',
      'additional_currencies' => 'additional_currencies',
      'buyer_tax_number' => 'string',
      'custom_id' => 'string',
      'deducted_tax_amount' => 'number',
      'tax_country_code' => 'string',
      'force_country_code' => 'string',
      'tax_amount' => 'number',
      'tax_timezone' => 'string',
      'buyer_email' => 'string',
      'original_transaction_key' => 'string',
      'test' => 'bool',
      'status' => 'string',
      'create_timestamp' => 'string',
      'total_amount' => 'number',
      'tax_entity_name' => 'string',
      'buyer_ip' => 'string',
      'refunded_tax_amount' => 'number',
      'countries' => 'countries',
      'invoice_place' => 'string',
      'verification_token' => 'string',
      'tax_deducted' => 'bool',
      'buyer_name' => 'string',
      'confirm_timestamp' => 'string',
      'evidence' => 'evidence',
      'amount' => 'number',
      'custom_data' => 'string',
      'billing_country_code' => 'string',
      'tax_supported' => 'bool',
      'invoice_number' => 'string',
      'currency_code' => 'string',
      'refunded_total_amount' => 'number',
      'description' => 'string',
      'supply_date' => 'string',
      'transaction_lines' => 'array[transaction_lines]',
      'order_date' => 'string',
      'key' => 'string'

    );

  /**
  * Invoice date of issue.
  */
  public $invoice_date; // string
  /**
  * Invoice address.
  */
  public $invoice_address; // invoice_address
  /**
  * Is the transaction created manually - using private token.
  */
  public $manual; // bool
  /**
  * Buyer's credit card prefix.
  */
  public $buyer_credit_card_prefix; // string
  /**
  * Additional currency information - can be used to receive additional information about invoice in another currency.
  */
  public $additional_currencies; // additional_currencies
  /**
  *  Buyer's tax number - EU VAT number for example.
  */
  public $buyer_tax_number; // string
  /**
  * Custom identifier provided upon transaction creation.
  */
  public $custom_id; // string
  /**
  * How much tax has been deducted.
  */
  public $deducted_tax_amount; // number
  /**
  * Two-letter ISO country code, e.g. FR. This code applies to detected/set country for transaction, but can be set using manual mode.
  */
  public $tax_country_code; // string
  /**
  * Two-letter ISO country code, e.g. FR. Use it to force country code for tax calculation.
  */
  public $force_country_code; // string
  /**
  * Tax amount of transaction.
  */
  public $tax_amount; // number
  /**
  * Timezone name for tax transaction.
  */
  public $tax_timezone; // string
  /**
  * Buyer's declared email address.
  */
  public $buyer_email; // string
  /**
  * Use data and evidence from original transaction. Tax will be re-calculated, but evidence won't be re-checked.
  */
  public $original_transaction_key; // string
  /**
  * Was this transaction created in test mode?
  */
  public $test; // bool
  /**
  * Transaction status.
  */
  public $status; // string
  /**
  * Date and time of transaction creation.
  */
  public $create_timestamp; // string
  /**
  * Total amount of transaction.
  */
  public $total_amount; // number
  /**
  * To which entity is the tax due.
  */
  public $tax_entity_name; // string
  /**
  * IP address of the buyer in dotted decimal (IPv4) or text format (IPv6).
  */
  public $buyer_ip; // string
  /**
  * Refunded tax amount.
  */
  public $refunded_tax_amount; // number
  /**
  * Map of countries calculated from evidence provided. This value is not stored and is available only upon tax calculation.
  */
  public $countries; // countries
  /**
  * Invoice place of issue.
  */
  public $invoice_place; // string
  /**
  * Verification token
  */
  public $verification_token; // string
  /**
  * True if the transaction deducted from tax and no tax is applied. Either set automatically when VAT number validates with VIES correctly, but can also be provided in manual mode.
  */
  public $tax_deducted; // bool
  /**
  * Buyer's name - first name and last name or company name.
  */
  public $buyer_name; // string
  /**
  * Date and time of transaction confirmation.
  */
  public $confirm_timestamp; // string
  /**
  * Tax country of residence evidence.
  */
  public $evidence; // evidence
  /**
  * Amount of transaction without tax.
  */
  public $amount; // number
  /**
  * Custom data related to transaction.
  */
  public $custom_data; // string
  /**
  * Billing two letter ISO country code.
  */
  public $billing_country_code; // string
  /**
  * Is tax calculation supported for a detected tax location?
  */
  public $tax_supported; // bool
  /**
  * Invoice number.
  */
  public $invoice_number; // string
  /**
  * Currency code for transaction - e.g. EUR.
  */
  public $currency_code; // string
  /**
  * Total amount refunde (including tax).
  */
  public $refunded_total_amount; // number
  /**
  * Transaction description.
  */
  public $description; // string
  /**
  * Supply date in yyyy-MM-dd format.
  */
  public $supply_date; // string
  /**
  * Transaction lines.
  */
  public $transaction_lines; // array[transaction_lines]
  /**
  * Order date in yyyy-MM-dd format.
  */
  public $order_date; // string
  /**
  * Id generated by taxamo.
  */
  public $key; // string
  }

