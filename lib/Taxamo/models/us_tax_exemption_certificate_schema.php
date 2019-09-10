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
class us_tax_exemption_certificate_schema {

  static $swaggerTypes = array(
      'certificate_id' => 'string',
      'detail' => 'us_tax_exemption_certificate_details_schema'

    );

  /**
  * The exemption certificate number.
  */
  public $certificate_id; // string
  /**
  * US tax exemption ertificate detail.
  */
  public $detail; // us_tax_exemption_certificate_details_schema
  }

