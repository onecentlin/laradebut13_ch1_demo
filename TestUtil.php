<?php

/** 1.4 */
class TestUtil
{
    public static function showProblem(string $test, string $message)
    {
        $msg = "---{$test}---\n\t{$message}\n----------------";
        echo $msg;
    }
}