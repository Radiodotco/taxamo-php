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
class Transactions {

  static $swaggerTypes = array(
      'confirm_timestamp' => 'string',
      'fully_informative' => 'bool',
      'deducted_tax_amount' => 'number',
      'buyer_credit_card_prefix' => 'string',
      'custom_data' => 'string',
      'buyer_name' => 'string',
      'invoice_date' => 'string',
      'create_timestamp' => 'string',
      'currency_code' => 'string',
      'supply_date' => 'string',
      'invoice_image_url' => 'string',
      'key' => 'string',
      'invoice_address' => 'invoice_address',
      'buyer_tax_number_valid' => 'bool',
      'verification_token' => 'string',
      'tax_supported' => 'bool',
      'transaction_lines' => 'array[transaction_lines]',
      'buyer_tax_number' => 'string',
      'status' => 'string',
      'custom_fields' => 'array[custom_fields]',
      'force_country_code' => 'string',
      'countries' => 'countries',
      'invoice_number' => 'string',
      'order_date' => 'string',
      'kind' => 'string',
      'source' => 'string',
      'amount' => 'number',
      'buyer_ip' => 'string',
      'buyer_email' => 'string',
      'original_transaction_key' => 'string',
      'billing_country_code' => 'string',
      'custom_id' => 'string',
      'tax_amount' => 'number',
      'additional_currencies' => 'additional_currencies',
      'invoice_place' => 'string',
      'total_amount' => 'number',
      'tax_entity_name' => 'string',
      'evidence' => 'evidence',
      'refunded_tax_amount' => 'number',
      'manual' => 'bool',
      'tax_timezone' => 'string',
      'description' => 'string',
      'test' => 'bool',
      'tax_deducted' => 'bool',
      'tax_country_code' => 'string',
      'refunded_total_amount' => 'number'

    );

  /**
  * Date and time of transaction confirmation.
  */
  public $confirm_timestamp; // string
  /**
  * Set to true if transaction has only informative lines.
  */
  public $fully_informative; // bool
  /**
  * How much tax has been deducted.
  */
  public $deducted_tax_amount; // number
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
  * Date and time of transaction creation.
  */
  public $create_timestamp; // string
  /**
  * Currency code for transaction - e.g. EUR.
  */
  public $currency_code; // string
  /**
  * Supply date in yyyy-MM-dd format.
  */
  public $supply_date; // string
  /**
  * Invoice image URL - provided by Taxamo.
  */
  public $invoice_image_url; // string
  /**
  * Id generated by taxamo.
  */
  public $key; // string
  /**
  * Invoice address.
  */
  public $invoice_address; // invoice_address
  /**
  * If the buyer tax number has been provided and was validated successfully. Always true for domestic transactions (billing country same as merchant's country), tax number doesn't get validated in that case.
  */
  public $buyer_tax_number_valid; // bool
  /**
  * Verification token
  */
  public $verification_token; // string
  /**
  * Is tax calculation supported for a detected tax location?
  */
  public $tax_supported; // bool
  /**
  * Transaction lines.
  */
  public $transaction_lines; // array[transaction_lines]
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
  * Map of countries calculated from evidence provided. This value is not stored and is available only upon tax calculation.
  */
  public $countries; // countries
  /**
  * Invoice number.
  */
  public $invoice_number; // string
  /**
  * Order date in yyyy-MM-dd format, in merchant's timezone. If provided by the API caller, no timezone conversion is performed. Default value is current date and time. When using public token, the default value is used.
  */
  public $order_date; // string
  /**
  * Transaction kind: eu-b2c, eu-b2b, domestic, untaxed
  */
  public $kind; // string
  /**
  * Transaction source software - e.g. plugin
  */
  public $source; // string
  /**
  * Amount of transaction without tax.
  */
  public $amount; // number
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
  * Tax amount of transaction.
  */
  public $tax_amount; // number
  /**
  * Additional currency information - can be used to receive additional information about invoice in another currency.
  */
  public $additional_currencies; // additional_currencies
  /**
  * Invoice place of issue.
  */
  public $invoice_place; // string
  /**
  * Total amount of transaction.
  */
  public $total_amount; // number
  /**
  * To which entity is the tax due.
  */
  public $tax_entity_name; // string
  /**
  * Tax country of residence evidence.
  */
  public $evidence; // evidence
  /**
  * Refunded tax amount.
  */
  public $refunded_tax_amount; // number
  /**
  * Is the transaction created manually - using private token. In manual mode, it is the merchant who calculates tax country and validates evidence. If you need API to do that when accessing the API with private token, just skip the 'manual' flag or use false value there and provide customer's ip address through buyer_ip field. Manual mode is also used when using original_transaction_key field.
  */
  public $manual; // bool
  /**
  * Timezone name for tax transaction.
  */
  public $tax_timezone; // string
  /**
  * Transaction description.
  */
  public $description; // string
  /**
  * Was this transaction created in test mode?
  */
  public $test; // bool
  /**
  * If the transaction is in a country supported by Taxamo, but the tax is not calculated due to merchant settings or EU B2B transaction for example.
  */
  public $tax_deducted; // bool
  /**
  * Two-letter ISO country code, e.g. FR. This code applies to detected/set country for transaction, but can be set using manual mode.
  */
  public $tax_country_code; // string
  /**
  * Total amount refunde (including tax).
  */
  public $refunded_total_amount; // number
  }

