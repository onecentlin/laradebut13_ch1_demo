<?php
include_once __DIR__.'/vendor/autoload.php';

/** 1.4 */
try {
    SimpleParserTestsWithTestUtil::testReturnsZeroWhenEmptyString();
} catch (\Exception $ex) {
    echo $ex->getMessage();
}