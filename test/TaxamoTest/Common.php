<?php
abstract class TaxamoTestCase extends UnitTestCase {
   function getApi() {
        $swagger = new APIClient('SamplePrivateTestKey1', 'https://api.taxamo.com');
        $swagger->sourceId = "TaxamoTestPHP/1.0.19";
        return new Taxamo($swagger);
   }
}
?>
