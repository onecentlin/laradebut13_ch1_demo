<?php
declare(strict_types=1);

/** 1.1 */
class SimpleParser
{
    public function parseAndSum(string $numbers) : int
    {
        if (strlen($numbers) == 0) {
            return 0;
        }
        if (strpos($numbers, ",") === false) {
            return (int)$numbers;
        } else {
            throw new Exception("I can only handle 0 or 1 numbers for now!");
        }
    }
}