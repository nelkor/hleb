<?php

namespace App\Commands;

class DefaultTask extends \MainTask
{
    // php console default-task [arg]

    const DESCRIPTION = "Default task";

    protected function execute($arg = null)
    {

        // Your code here

        print "\n" .__CLASS__ . " done." . "\n";
    }

}


