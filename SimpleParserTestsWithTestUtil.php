<?php

/** 1.4 with TestUtil */
class SimpleParserTestsWithTestUtil
{
    public static function testReturnsZeroWhenEmptyString()
    {
        $testName = __METHOD__;
        try {
            $p = new \SimpleParser();
            $result = $p->parseAndSum("");
            if ($result != 0) {
                // echo "*** SimpleParserTests::testReturnsZeroWhenEmptyString:\n----\nParse and sum should have returned 0 on an empty string";
                TestUtil::showProblem($testName, "Parse and sum should have returned 0 on an empty string");
            }
        } catch (\Exception $ex) {
            // echo $ex->getMessage();
            TestUtil::showProblem($testName, $ex->getMessage());
        }
    }
}