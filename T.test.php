<?php

namespace Bob;

include("T.php");

$t = new T();
$t->start();
$t->put("put.txt", "index");
$t->flush();
$t->finish();

$t->index->test();