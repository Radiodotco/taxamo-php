<?php namespace Taxamo;
/**
 *  Copyright 2014-2018 Taxamo
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
class transaction_lines {

  static $swaggerTypes = array(
      'product_type' => 'string',
      'deducted_tax_amount' => 'number',
      'deducted_tax_rate' => 'number',
      'supply_date' => 'string',
      'id' => 'number',
      'unit_price' => 'number',
      'unit_of_measure' => 'string',
      'quantity' => 'number',
      'custom_fields' => 'array[custom_fields]',
      'line_key' => 'string',
      'tax_name' => 'string',
      'product_code' => 'string',
      'amount' => 'number',
      'custom_id' => 'string',
      'informative' => 'bool',
      'tax_amount' => 'number',
      'tax_rate' => 'number',
      'additional_currencies' => 'additional_currencies',
      'total_amount' => 'number',
      'product_tax_code' => 'string',
      'refunded_tax_amount' => 'number',
      'description' => 'string',
      'refunded_total_amount' => 'number'

    );

  /**
  * Product type, according to dictionary /dictionaries/product_types. 
  */
  public $product_type; // string
  /**
  * Deducted tax amount, calculated by taxmo.
  */
  public $deducted_tax_amount; // number
  /**
  * Deducted tax rate, calculated by taxamo.
  */
  public $deducted_tax_rate; // number
  /**
  * Date of supply in yyyy-MM-dd format.
  */
  public $supply_date; // string
  /**
  * Generated id.
  */
  public $id; // number
  /**
  * Unit price.
  */
  public $unit_price; // number
  /**
  * Unit of measure.
  */
  public $unit_of_measure; // string
  /**
  * Quantity Defaults to 1.
  */
  public $quantity; // number
  /**
  * Custom fields, stored as key-value pairs. This property is not processed and used mostly with Taxamo-built helpers.
  */
  public $custom_fields; // array[custom_fields]
  /**
  * Generated line key.
  */
  public $line_key; // string
  /**
  * Tax name, calculated by taxamo.  Can be overwritten when informative field is true.
  */
  public $tax_name; // string
  /**
  * Internal product code, used for invoicing for example.
  */
  public $product_code; // string
  /**
  * Amount. Required if total amount or both unit price and quantity are not provided.
  */
  public $amount; // number
  /**
  * Custom id, provided by ecommerce software.
  */
  public $custom_id; // string
  /**
  * If the line is provided for informative purposes. Such line must have :tax-rate and optionally :tax-name - if not, API validation will fail for this line.
  */
  public $informative; // bool
  /**
  * Tax amount, calculated by taxamo.
  */
  public $tax_amount; // number
  /**
  * Tax rate, calculated by taxamo. Must be provided when informative field is true.
  */
  public $tax_rate; // number
  /**
  * Additional currency information - can be used to receive additional information about invoice in another currency.
  */
  public $additional_currencies; // additional_currencies
  /**
  * Total amount. Required if amount or both unit price and quantity are not provided.
  */
  public $total_amount; // number
  /**
  * External product tax code for a line, for example TIC in US Sales tax.
  */
  public $product_tax_code; // string
  /**
  * Refunded tax amount, calculated by taxmo.
  */
  public $refunded_tax_amount; // number
  /**
  * Line contents description.
  */
  public $description; // string
  /**
  * Refunded total amount, calculated by taxmo.
  */
  public $refunded_total_amount; // number
  }

