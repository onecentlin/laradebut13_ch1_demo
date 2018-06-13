<?php
include_once __DIR__.'/vendor/autoload.php';

/** 1.3 */
try {
    SimpleParserTests::testReturnsZeroWhenEmptyString();
} catch (\Exception $ex) {
    echo $ex->getMessage();
}