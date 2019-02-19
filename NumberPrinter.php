<?php

class NumberPrinter
{
    public static function execute()
    {
        for ($i = 0; $i < 5; ++$i) {
            echo $i . "\n";
        }
    }

}

NumberPrinter::execute();
