<?php
/** 1.2 */
class SimpleParserTests
{
    public static function testReturnsZeroWhenEmptyString()
    {
        try {
            $p = new \SimpleParser();
            $result = $p->parseAndSum("");
            if ($result != 0) {
                echo "*** SimpleParserTests::testReturnsZeroWhenEmptyString:\n----\nParse and sum should have returned 0 on an empty string";
            }
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }
}