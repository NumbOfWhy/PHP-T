<?php

namespace Bob;

include("err.php");

ob_start();
echo '$index'." = new class()
{
    public function __construct()
    {
        echo \"Hello, World!\";
    }

    public function test()
    {
        echo \"Hello, Test!\";
    }
};";

$contents = ob_get_flush();
ob_end_clean();


eval($contents);


echo isset($index) ? true : false;

$index->test();